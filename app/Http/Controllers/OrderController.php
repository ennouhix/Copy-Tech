<?php



    namespace App\Http\Controllers;


    use Illuminate\Http\Request;

    use App\Models\Order;

    use Illuminate\Support\Facades\Mail;
    use App\Mail\OrderConfirmation;
    use App\Http\Controllers\Controller;


    class OrderController extends Controller
    {
        public function submitOrder(Request $request)
        {
            // Validate the form data
            $request->validate([
                'datetime' => 'required|date_format:Y-m-d\TH:i',
                // ... autres règles de validation pour les champs existants
            ]);

            // Handle file upload
            //$pdfPath = $request->file('pdfFile')->store('pdfs');

            // Assuming 'pdfFile' is the name of the file input in your form
            $pdfFile = $request->file('pdfFile');

            // Get the original name of the uploaded file
            $originalFileName = $pdfFile->getClientOriginalName();

            // Store the PDF file
            $pdfPath = $pdfFile->storeAs('pdfs', $originalFileName, 'public');

            // Create a new order in the database
            $order = Order::create([
                'professeur' => $request->input('Professeur'),
                'impression_type' => $request->input('impression'),
                'filiere' => $request->input('filiere'),
                'ncopies' => $request->input('ncopies'),
                'format' => $request->input('Format'),
                'print_type' => $request->input('type'),
                'color' => $request->input('couleur'),
                'print_style' => $request->input('timpression'),
                'datetime'=>$request->input('datetime'),
                'pdf_path' => $pdfPath,
                'original_pdf_name' => $originalFileName, // Store the original file name
                

            ]);

            $user = auth()->user(); // Si l'utilisateur est connecté
            Mail::to($user->email)->send(new OrderConfirmation($order));

            // You can add any additional logic or notifications here

            return redirect('/dashboard')->with('success', 'Commande soumise avec succès!');
        }
        public function afficherCommandes()
        {
            $orders = Order::all();
            return view('user/commande', ['orders' => $orders]);
        }
    }
