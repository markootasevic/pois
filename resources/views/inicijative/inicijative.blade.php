<html5>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
        
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">  
    </head>
    <body>
        
        <form role='form' action='{{route('postInicijativa')}}' method='post' enctype="multipart/form-data">
            <div class="form-group">
                
                <label for="imeIPrezime"> Ime i prezime: </label>
                <input type="text" class='form-group' id='imeIPrezime' placeholder="npr. Pera Perić" required>
                
            </div>
            
            <div class="form-group">
                
                <label for="nazivPrivrednogSubjekta"> Naziv privrednog subjekta: </label>
                <input type="text" class='form-group' id='nazivPrivrednogSubjekta' placeholder="npr. UBACI OVDE">
                <label for="nazivPrivrednogSubjekta"> (obavezno za privredne subjekte) </label>

            </div>
            <div class="form-group">
                
                <label for="Adresa"> Adresa: </label>
                <input type="text" class='form-group' id='Adresa' placeholder="npr. Bulevar Kralja Aleksandra 1, Beograd" required>

            </div>
            <div class="form-group">
                <label for="email">Vaš email: </label>
                <input type="email" class="form-control" id="email" placeholder="email@email.com" required>
                <label for="email">Molimo vas da unesete ispravne podatke kako bismo mogli da Vas kontaktiramo*</label>
            </div>
            
            <div class="form-group">
                <label for="nazivProcedure">Naziv procedure: </label>
                <input type="text" class="form-control" id="nazivProcedure" placeholder="npr. Produženje registracije" required>
            </div>
            
            <div class="form-group">
                <label for="nazivZakona">Naziv zakona/podzakonskog akta kojim je procedura uređena: </label>
                <input type="text" class="form-control" id="nazivZakona" placeholder="npr. Zakon o saobraćaju" required>
            </div>
            
            <div class="form-group">
                <label for="clanoviZakona">Navedi član/članove zakona/podzakonskog akta: </label>
                <input type="text" class="form-control" id="nazivClana" placeholder="npr. član 2, stav 4." >
            </div>
            <!--IZDVOJ U CSS OVO ZA TEXTAREA, I PROSIRI JOS-->
            <div class="form-group">
                <label for="primedbe">Primedbe/Problemi u primeni: </label>
                <input type="textarea" class="form-control" id="primedbe" placeholder="Unesite primedbe koje imate na proceduru" style='
    overflow-y: scroll;
    height: 100px;
    resize: none;' required>
            </div>
            
            <div class="form-group">
                <label for="predlog">Predlog izmene: </label>
                <input type="textarea" class="form-control" id="predlog" placeholder="Navedite na koji način biste želeli da promenite proceduru" style='
    overflow-y: scroll;
    height: 100px;
    resize: none;' required>
            </div>
            
            <div class="form-group">
                <label for='prilog'> Prilog </label>
                <input type="file" name="prilog" class="form-control" id="prilog" maxlength=50 allow="text/*">
            </div>
            <button type="submit" class="btn btn-default">Pošalji</button>
        </form>
    </body>
</html5>