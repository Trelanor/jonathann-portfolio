<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('infos');
    }
 
    public function store(Request $request)
    {
        

        $contact = new Contact();
        $contact->nom = $request->input('nom');
        $contact->prenom = $request->input('prenom');
        $contact->email = $request->input('email');
        $contact->sujet = $request->input('sujet');
        $contact->message = $request->input('message');

        $contact->save();

        $this->sendEmail($contact);
        
    }

    private function sendEmail($contact)
    {
        if(!empty($_POST)) {
		
            $errors = [];
            
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $sujet = $_POST['sujet'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            
            if(empty($nom)) {
                $errors['nom'] = 'Insérer votre nom';
            }
            
            if(empty($prenom)) {
                $errors['prenom'] = 'Insérer votre prénom';
            }
            
            if(empty($sujet)) {
                $errors['sujet'] = 'Veulliez préciser le sujet';
            }
            
            if(empty($email)) {
                $errors['email'] = 'Insérer votre adresse e-mail';
            }
            
            if(empty($message)) {
                $errors['message'] = 'Insérer votre message';
            }
            
            if(empty($errors)) {
                //si le formulaire est validé
                $to = 'jonathan.n@codeur.online';
                $headers ='From: "Nom_du_destinataire"<jonathan.n@codeur.online>'."\n";
                $headers .='Content-Type: text/html; charset="utf-8"'."\n";
                
                $msg = 'nom: '.$nom;
                $msg .= 'prenom: '.$prenom;
                $msg .= 'sujet: '.$sujet;
                $msg .= 'email: '.$email;
                $msg .= 'message: '.$message;
                
            
                if(mail($nom, $prenom, $sujet, $msg, $headers))
                {
                    echo '<script languag="javascript">alert("Le message a été correctement envoyé");</script>';
                }
                else
                {
                    echo '<script languag="javascript">alert("Le message n\'a pas pu être envoyé");</script>';
                }			
            }
        }
    }
}

