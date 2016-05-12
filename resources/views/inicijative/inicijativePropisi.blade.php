  @extends('layouts.app')

@section('content')
        <form role='form' action='{{url('/inicijativa')}}' method='post' enctype="multipart/form-data">

            <div class="form-group">
                      
                <label for="imeIPrezime"> Ime i prezime: </label><br>
                <input type="text" class='form-group' name='imePrezime' placeholder="npr. Petar Petrović" required></br>
                
            </div>
            
            <div class="form-group">
                
                <label for="nazivPrivrednogSubjekta"> Naziv privrednog subjekta: </label><br>
                <input type="text" class='form-group' name='nazivPrivrednogSubjekta' placeholder="npr: Preduzeće d.o.o."></br>
                <label for="nazivPrivrednogSubjekta"> <h6>(Obavezno za privredne subjekte.)</h6> </label>

            </div>
            <div class="form-group">
                
                <label for="Adresa"> Adresa: </label><br>

                <input type="text" class='form-group' name='adresa' placeholder="npr: Bulevar Kralja Aleksandra 1, Beograd" style="width:300px" required></br>

            </div>
            <div class="form-group">
                <label for="email">Vaš email: </label>
                <input type="email" class="form-control" name="email" placeholder="example{{'@'}}mail.com" style=" width:200px;">
                <label for="email"> <h6>(Molimo vas da unesete ispravne podatke kako bismo mogli da Vas kontaktiramo.)</h6> </label>
            </div>
            
            <div class="form-group">
                <label for="nazivZakona">Naziv zakona/podzakonskog akta kojim je propis uređen: </label>
                <input type="text" style="width: 600px;" class="form-control" name="nazivZakona" placeholder="npr: Zakon o saobraćaju" required>
            </div>
            
            <div class="form-group">
                <label for="clanoviZakona">Navedi član/članove zakona/podzakonskog akta: </label>
                <input type="text" style="width: 600px;" class="form-control" name="nazivClana" placeholder="npr: član 2, stav 4." >
            </div>
            <!--IZDVOJ U CSS OVO ZA TEXTAREA, I PROSIRI JOS-->
            <div class="form-group">
                <label for="primedbe">Primedbe/problemi u primeni: </label>
                <textarea style="resize:both; width: 600px;" class="form-control" id="primedbe" placeholder="Unesite primedbe koje imate u vezi propisa"></textarea>
                </div>

            <div class="form-group">
                <label for="primedbe">Predlog izmene: </label>
                <textarea style="resize:both; width: 600px;" class="form-control" name="predlogIzmene" placeholder="Navedite Vaš predlog za rešavanje problema"></textarea>
                </div>
            
            <div class="form-group">
                <label for='prilog'> Prilog </label>
                <input type="file" style="width: auto;" name="prilog" class="form-control" data-classButton="btn btn-primary" data-input="false" data-classIcon="icon-plus" buttonText="Izaberi">
            </div>
            
            <input type="hidden" name="tip" value="propis">
                {{csrf_field()}}
            <button type="submit" class="btn btn-default">Pošalji</button>
        </form>


@stop
