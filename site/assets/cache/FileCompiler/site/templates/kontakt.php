<?php include 'includes/hlavicka.php' ?>
<div class="uk-section uk-section-xsmall">
<div class="uk-text-center">
    <?php echo "<h3 class='nadpisy'> $page->title</h3>"; ?>
    </div>
</div>

<div class="uk-section uk-section-small pozadi_kontakt">
    <div class="uk-container uk-container-small">
        <div class="uk-flex uk-flex-center ">
            <div class='uk-width-1-2 kontakt1'>


               <div><p><span class='ikony' uk-icon="icon: receiver; ratio: 1.7"></span>  667 427 975</p></div>
               <div><p ><span class='kontakt_polozky' class='ikony' uk-icon="icon: mail; ratio: 1.7"></span>  tessalat@gmail.com</p></div>
               <div><p><span class='ikony' uk-icon="icon: location; ratio: 1.7"></span>  Nádražní 451/2a, Brno-střed</p></div>
              
            </div>
            <div class='uk-width-1-2'>
                <div class="uk-text-center">
                <h4 class='nadpis_formular'>Zeptejte se nás!</h4>
                </div>
                <form>
                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-large uk-form-medium" type="text" placeholder="Jméno a příjmení">
                    </div>
                    <div class="uk-margin">
                        <input class="uk-input uk-form-width-large uk-form-medium" type="email" placeholder="E-mail">
                    </div>

                    <div class="uk-margin">
            <textarea class="uk-textarea" rows="5" placeholder="Zpráva"></textarea>
        </div>
                </form>
                <div class="uk-flex uk-flex-center ">
                <button class="uk-button uk-button-default">Odeslat</button>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="uk-section uk-section-medium ">
    <div class="uk-container">
        <div class="uk-flex uk-flex-center">
            <?php echo $page->mapa; ?>

        </div>
    </div>
</div>


<?php include 'includes/paticka.php' ?>