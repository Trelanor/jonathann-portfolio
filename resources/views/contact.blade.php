<div class="contact">
    <h2>If you want contact me</h2>

    <div class="contain">
        <form action="{{ url('users') }}" method="POST">
            {{ csrf_field() }}

            <div class="champs">
                <label for="nom">Firstname</label>
                <input type="text" name="nom" id="nom">

                <label for="prenom">Lastname</label>
                <input type="text" name="prenom" id="prenom"><br>
                
                <label for="email">Email</label>
                <input type="email" name="email">
                
                <label for="sujet">Subject</label>
                <input type="text" name="sujet"><br>
            </div>
            
            <div class="message">
                <label>Message</label><br>
                <textarea name="message" id="message" rows="10" cols="60"></textarea><br>
            </div>
    </div>
    <button class="button" type="submit">Envoyez</button>
</div>