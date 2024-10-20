<?PHP

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\ContactMail;

class MailController extends Controller
{
    /**
     * Write code on Method
     *
    //  * @return response()
     */
    public function index(Request $request)
    {
        $mailData = $request->validate([
            'name' => 'required|string|min:2|max:255',
            'email' => 'required|email|min:2|max:255',
            'subject' => 'required|string|min:2|max:255',
            'message' => 'required|string|min:2|max:255',
        ]);

        Mail::to('astauchiha234@gmail.com')->send(new ContactMail($mailData));

        dd("Email is sent successfully.");
    }
}
