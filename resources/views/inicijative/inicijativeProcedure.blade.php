@extends('layouts.app')

@section('content')

    <div class = "col-md-6 col-offset-3">
        <form role='form' action='{{url('/inicijativa')}}' method='post' enctype="multipart/form-data">

            <div class="form-group">
                      
                <label for="imeIPrezime"> Ime i prezime: </label><br>
                <input type="text" class='form-control' name='imePrezime' placeholder="npr. Petar Petrović" required></br>
                
            </div>
            
            <div class="form-group">
                
                <label for="nazivPrivrednogSubjekta"> Naziv privrednog subjekta: </label><br>
                <input type="text" class='form-control' name='nazivPrivrednogSubjekta' placeholder="npr: Preduzeće d.o.o."></br>
                <label for="nazivPrivrednogSubjekta"> <h6>(Obavezno za privredne subjekte.)</h6> </label>

            </div>
            <div class="form-group">
                
                <label for="Adresa"> Adresa: </label><br>
                <input type="text" class='form-control' name='adresa' placeholder="npr: Bulevar Kralja Aleksandra 1, Beograd" style="" required></br>

            </div>
            <div class="form-group">
                <label for="email">Vaš email: </label>
                <input type="email" class="form-control" name="email" placeholder="npr: petar.petrovic{{'@'}}gmail.com" style=" ">
                <label for="email"> <h6>(Molimo vas da unesete ispravne podatke kako bismo mogli da Vas kontaktiramo.)</h6> </label>
            </div>
            
            <div class="form-group">
                <label for="nazivProcedure">Naziv procedure: </label>
                <input type="text" style="" class="form-control" name="nazivProcedure" placeholder="npr: Produženje registracije" required>
            </div>
            
            <div class="form-group">
                <label for="nazivZakona">Naziv zakona/podzakonskog akta kojim je procedura uređena: </label>
                <input type="text" style="" class="form-control" name="nazivZakona" placeholder="npr: Zakon o saobraćaju" required>
            </div>
            
            <div class="form-group">
                <label for="clanoviZakona">Navedi član/članove zakona/podzakonskog akta: </label>
                <input type="text" style="" class="form-control" name="nazivClana" placeholder="npr: član 2, stav 4." >
            </div>
            <!--IZDVOJ U CSS OVO ZA TEXTAREA, I PROSIRI JOS-->
            <div class="form-group">
                <label for="primedbe">Primedbe/problemi u primeni: </label>
                <textarea style="resize:vertical; min-height: 50px" class="form-control" id="primedbe" placeholder="Unesite primedbe koje imate na proceduru"></textarea>
                </div>

            <div class="form-group">
                <label for="primedbe">Predlog izmene: </label>
                <textarea style="resize:vertical; min-height: 50px" class="form-control" name="predlogIzmene" placeholder="Navedite Vaš predlog za rešavanje problema"></textarea>
                </div>
            
            <div class="form-group">
                <label for='prilog'> Prilog </label>
                <input type="file" style="width: auto; height:inherit;" multiple="multiple" " name="prilog" class="form-control" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" buttonText="Izaberi">
            </div>
            
            <input type="hidden" name="tip" value="procedura">
                {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Pošalji</button><br>
            
      </form></br>
    </div>

@stop
