var getAll = function(){

	var Theroes = [];
	$("#test").html("");
	$.ajax({
				type:'GET', 
				cache: false,
				url:"./getAll.php",
				success: function(data) 
				{
					var heroes = JSON.parse(data);
					heroes.forEach(function (hero){
						Theroes.push(hero);
						$("#test").append("<a onClick=\"showInfo(" + hero.id + "\")> Nom : " + hero.nom + "</a> Pv : " + hero.pv +  " Description : " + hero.description + " </br><a href=# onClick=\"deleteHeroes(" + hero.id + ");\">Supprimer</a></br>"); 
					})
				}
			});
	return Theroes;
}

var addHeroes = function(event){
	event.preventDefault();
	var fNom = $("#nom").val();
	var fPv = parseInt($("#pv").val());
	var fDescription = $("#description").val();

	if(fNom == "" || fPv == ""|| fDescription == ""){
		$("#result").html("Heroes non ajouté ! Aumoins un des champs est vide !");
		return;
	}
	if(fPv <= 0 || isNaN(fPv)){ // isNaN = is Not a number
		$("#result").html("Heroes non ajouté ! Les pvs doivent avoir une valeur numérique supérieur à 0 !");
		return;
	}

	$.ajax({
				type:'POST', 
				cache: false,
				url:"./addHeroes.php",
				data : { "nom" : fNom, "pv" : fPv, "description" : fDescription }, 
				success: function(data) 
				{
					$("#result").html("Heroes ajouté !!");
					getAll(); // MaJ modele
				},
				error : function() 
				{
					$("#result").html("Heroes non ajouté !");
				}
			});
}


var deleteHeroes = function(id){
	if(id <= 0 || isNaN(id)){ // isNaN = is Not a number
		$("#result").html("Heroes non supprimé, id bizzare");
		return;
	}
	if (confirm("Attention cette action est irréversible ! Êtes-vous certains ?")){
		$.ajax({
					type:'POST', 
					cache: false,
					url:"./delete.php",
					data : { "id" : id }, 
					success: function(data) 
					{
						$("#result").html("Heroes Supprimé !!");
						getAll(); // MaJ modele
					},
					error : function() 
					{
						$("#result").html("Heroes non supprimé !");
					}
				});
	}
}

getAll();

$("#formHeroes").on("submit", addHeroes);	
