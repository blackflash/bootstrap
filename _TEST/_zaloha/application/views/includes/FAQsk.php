<div id="home">
	
	

	<div id="breadcrumbs">
        <a href="<?php echo base_url(); ?>" class="breadcrumb">Hlavná stránka</a>>>
        <a href="#" class="breadcrumbChecked">Časté otázky</a>
    </div>

    <center><h1 class="reFontIt">FAQ</h1></center>
    <div class="greenLine"></div>

	<div id="homeBottom">
		<div id="leftPanel2">
			<ul>
				<li><a href="#ako-to-funguje">Ako to funguje ?</a></li>				
				<li><a href="#spotrebitel">Som spotrebiteľ, zaujalo ma to, čo ďalej ?</a></li>			
				<li><a href="#firma">Som firma, zaujalo ma to, čo ďalej ?</a></li>	
			</ul>

		</div>
		<div id="middlePanel2">
			<ul>
				<li><a href="#kolko-ma-to-bude-stat">Koľko ma to bude stáť ?</a></li>
				<li><a href="#ktore-platformy-podporujete">Ktoré platformy podporujete ?</a></li>
				<li>Iná otázka ? Napíšte nám</li>
			</ul>

		</div>

		<div id="rightPanel2">
			<form action="<?php echo base_url()."cleverfrogs/sendEmail/sk/FAQsk" ?>" method="post" id="contactForm">
                <fieldset>
                    <a class="faqButton fr sendEmail">Odoslať správu</a>
                    <p>
                        <input type="hidden" name="meno" value="Anonymná otázka z FAQ">
                        <input type="hidden" name="email" id="email" value="no@email.sk">
                        <label for="text" style="font-size: 14px; line-height: 25px;margin-top: 5px;">Vaša otázka*</label>
                        <textarea id="textFaq" cols="10" rows="10" name="text" style="width: 290px; height: 150px;"><?php if(isset($text)) echo $text ?></textarea>
                    </p>
                </fieldset>
            </form>

            <?php 

                echo '<div id="emailError">';
                    if(validation_errors()){
                        echo    validation_errors();        
                    }
                echo '</div>';      

            ?>

            <script type="text/javascript">

                function validateEmail(email) { 
                    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                    return re.test(email);
                } 

                $(".sendEmail").click(function(){

                    var ret = validateEmail($("#email").val());
                    if(ret == true)
                    $("#contactForm").submit();
                    if(ret == false){
                        alert("Zadali ste email v nesprávnom formáte.")
                    }
                });
            </script>


		</div>

	</div>
    <a id="ako-to-funguje"></a>
    <div class="clearfix"></div>

	<div id="dottedLine"></div>

	<div class="messageBox">
        <h4>Ako to funguje ?</h4>
        <p>
            Spätnú väzbu môžete dať cez náš web alebo cez našu mobilnú aplikáciu. Naša mobilná aplikácia "CleverFrogs" je dostupná pre Android a Apple iOS ( pripravujeme )
            zadarmo. Po jej spustení si vyberiete poskytovateľa služieb, čas poskytnutia a ohodnotíte ho na stupnici plus pridáte otvorené komentáre. Vaša spätná väzba
            sa ďalej dostane priamo k pracovníkovi zodpovednému za kvalitu služieb.
            Služba "CleverFrogs" podporuje kooperatívu spätnej väzby, takže kvalita a zrozumiteľnosť zákazníckej spätnej väzby, je pre nás dôležitá.
            Každý používateľ si bude budovať vlastnú reputáciu a umožníme mu stať sa expertom v konkrétnej oblasti služieb. Užívatelia s dobrou reputáciou a expertným statusom
            budú mať dôležitejšie slovo pri zmene/nastavovaní budúcich služieb. Viac sa dozviete po zaregistrovaní ( pripravujeme ).
        </p>
    </div>
    
    <div class="messageBox">
        <a id="spotrebitel"></a>
        <h4>Som spotrebiteľ, zaujalo ma to, čo ďalej ?</h4>
        <p>
            Zaregistruj sa priamo z hlavnej stránky alebo si klikni <a href=" <?php echo base_url(); ?> /auth/register">Registrácia</a>. Zároveň si môžeš stiahnuť našu mobilnú
            aplikáciu z PlayStore resp. AppStore ( pripravujeme ). Po registrácii a aktivácii účtu môžeš ihneď začať hodnotiť, budovať svoju reputáciu a zlepšovať služby
            vo svojom okolí.
        </p>
    </div>

    <div class="messageBox">
    	<a id="firma"></a>
        <h4>Som firma, zaujalo ma to, čo ďalej ?</h4>
        <p>
            Napíšte nám na info@cleverfrogs.com, uveďte svoje telefónne číslo a my sa Vám ozveme.
        </p>
    </div>

    <div class="messageBox">
    	<a id="kolko-ma-to-bude-stat"></a>
        <h4>Koľko ma to bude stáť ?</h4>
        <p>
            Ako užívatelia aplikácie/webu nič. Spoplatnené sú len niektoré služby pre firmy. Cena pre firmy sa odvíja od viacerých faktorov ako je napríklad počet alebo komplexnosť
            objednanej služby.
        </p>
    </div>

    <div class="messageBox">
    	<a id="ktore-platformy-podporujete"></a>
        <h4>Ktoré platformy podporujete ?</h4>
        <p>
            V súčastnosti plánujeme podporovať Apple(iOS) a Android.
        </p>
    </div>

</div>