function afficher_liste_pseudo()
{
	var url="php/recuperer_pseudos.php";
	var xhr=getXHR();
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4) {
			if(xhr.status == 200) {
				afficher_liste_pseudo_cb(xhr.responseText);
			}
		}
	};
	xhr.open("GET", url, true);
	xhr.send(null);
}

function afficher_liste_pseudo_cb(reponse)
{
	$('div_liste_pseudo').innerHTML = reponse;
}

function envoyer_pseudo()
{
	var url="php/envoyer_pseudo.php";

	hide('div_erreur');

	var pseudo = $('pseudo').value;
	if(pseudo.length<3)
	{
		$('div_erreur').innerHTML = '<p class="erreur">Le pseudo est trop court</p>';
		show('div_erreur');
		return;
	}

	var message = $('message').value;
	if(message.length<5  )
	{
		$('div_erreur').innerHTML = '<p class="erreur">CONVERSATION VIDE</p>';
		show('div_erreur');
		return;
	}

	
	var params="pseudo="+encodeURIComponent(pseudo)+"&message="+encodeURIComponent(message);

	var xhr=getXHR();
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4) {
			if(xhr.status == 200) {
				envoyer_pseudo_cb(xhr.responseText);
			}
		}
	};
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	xhr.send(params);

}

function envoyer_pseudo_cb(message)
{
	if(message=="OK")
	{
		afficher_liste_pseudo();
	}
	else
	{
		var erreur;
		switch(message)
		{
			case 'ERR100': 
				erreur = '<p class="erreur">Le pseudo est trop court</p>';
				break;

			case 'ERR110':
				erreur = '<p class="erreur">Le pseudo a déjà été choisi</p>';
				break;

			case 'ERR200':
				erreur = '<p class="erreur">CONVERSATION VIDE</p>';
				break;

		}
		$('div_erreur').innerHTML=erreur;
		show('div_erreur');
	}
}
  
