<!DOCTYPE html>
<html>
<head>
    <title>Projet Exalog - Fusion de branches</title>
    <!-- Inclure vos feuilles de style CSS et scripts JavaScript -->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script>
        function ajouterElement() {
            var container = document.getElementById("container");
            
            // Créer le label
            var label = document.createElement("label");
            label.setAttribute("for", "branch");
            label.textContent = "Choisir une branche :";
            
            // Créer l'input
            var input = document.createElement("input");
            input.setAttribute("list", "branche")
            input.setAttribute("name", "branch");
            
            // Ajouter le label et l'input au container
            container.appendChild(label);
            container.appendChild(input);
            
            // Ajouter une ligne vide pour séparer les éléments
            container.appendChild(document.createElement("br"));
        }
    </script>

</head>
<body>
    <ul>
        <li><a href="default.asp">Accueil</a></li>
        <li><a href="news.asp">Comment fusionner les branches</a></li>
        <li><a href="contact.asp">A quoi ça sert ?</a></li>
        <li><a href="identifiant.php">Connexion</a></li>
    </ul>
    <h1>Projet Exalog - Fusion de branches</h1>

    <button onclick="ajouterElement()">+</button>
    <form action="merge.php" method="POST" target="blank">

    
    <div id="container"></div>
    <label for="branch">Choisir une branche:</label>
<input list="branche" id="branch" name="branch">
    <datalist id="branche">
        
                <option value="athevenet_BANKX-74845_BANKX-74846_from_version/bankx-v16.15.0-max">
                <option value="amarandiuc_BANKX-65643_BANKX-65644_from_version/bankx-v16.1.0-max">
                <option value="amarandiuc_BANKX-67648_BANKX-67649_from_version/bankx-v16.2.0-max">
                <option value="amarandiuc_BANKX-68578_BANKX-68579_from_version/bankx-v16.6.0-max">    
                <option value="amarandiuc_BANKX-68884_BANKX-68885_from_version/bankx-v14.4.0-max">     
                <option value="amarandiuc_BANKX-68898_BANKX-68899_from_version/bankx-v16.6.0-max">    
                <option value="amarandiuc_BANKX-69623_BANKX-69624_from_version/bankx-v16.5.0-max">     
                <option value="amarandiuc_BANKX-69727_BANKX-69809_from_version/bankx-v16.7.0-max">   
                <option value="amarandiuc_BANKX-70135_BANKX-70136_from_version/bankx-v16.6.0-max">   
                <option value="amarandiuc_BANKX-70466_BANKX-70467_from_version/bankx-v16.7.0-max">  
                <option value="amarandiuc_BANKX-70623_BANKX-70841_from_version/bankx-v16.6.0-max">   
                <option value="amarandiuc_BANKX-70795_BANKX-70796_from_version/bankx-v16.7.0-max">   
                <option value="amarandiuc_BANKX-71123_BANKX-71124_from_version/bankx-v16.3.0-max">  
                <option value="amarandiuc__BANKX-1_from_version/bankx-v16.6.0-max">   
                <option value="amarandiuc__BANKX-69624-16.7_from_version/bankx-v16.7.0-max">  
                <option value="amarandiuc__BANKX-BANKX-67649_from_version/bankx-v14.4.0-max">   
                <option value="athevenet_BANKX-72640_BANKX-73478_from_version/bankx-v16.11.0-max">   
                <option value="athevenet_BANKX-72657_BANKX-72851_from_version/bankx-v16.11.0-max">   
                <option value="athevenet_BANKX-72657_BANKX-73703_from_version/bankx-v16.11.0-max">   
                <option value="athevenet_BANKX-73240_BANKX-73403_from_version/bankx-v16.13.0-max">  
                <option value="athevenet_BANKX-73390_BANKX-73391_from_version/bankx-v16.10.0-max">  
                <option value="athevenet_BANKX-73573_BANKX-73695_from_version/bankx-v16.11.0-max">   
                <option value="athevenet_BANKX-73705_BANKX-73706_from_version/bankx-v16.13.0-max">   
                <option value="athevenet_BANKX-73767_BANKX-73768_from_version/bankx-v16.12.0-max">   
                <option value="athevenet_BANKX-73799_BANKX-73801_from_version/bankx-v16.13.0-max">    
                <option value="athevenet_BANKX-74213_BANKX-74214_from_version/bankx-v16.10.0-max">   
                <option value="athevenet_BANKX-74320_BANKX-74321_from_version/bankx-v16.14.0-max">   
                <option value="athevenet_BANKX-74404_BANKX-74405_from_version/bankx-v16.14.0-max">  
                <option value="athevenet_BANKX-74629_BANKX-74630_from_version/bankx-v16.13.0-max">          
                <option value="csom_BANKX-67023_BANKX-67032_from_version/bankx-v16.3.0-max">  
                <option value="ctang_BANKX-69990_BANKX-69991_from_version/bankx-v16.7.0-max"> 
                <option value="ctchelidze_BANKX-74689_BANKX-74690_from_version/bankx-v16.15.0-max">   
                <option value="ctchelidze_BANKX-74700_BANKX-74701_from_version/bankx-v16.15.0-max">
                <option value="dev/WF4yeux">  
                <option value="dhoang_BANKX-69510_BANKX-69536_from_version/bankx-v16.6.0-max">  
                <option value="dhoang_BANKX-73163_BANKX-73693_from_version/bankx-v16.13.0-max">  
                <option value="dhoang_BANKX-73163_BANKX-73759_from_version/bankx-v16.11.0-max">  
                <option value="dhoang_BANKX-73163_BANKX-73842_from_version/bankx-v16.11.0-max">  
                <option value="dhoang_BANKX-73163_BANKX-73866_from_version/bankx-v16.13.0-max">   
                <option value="dhoang_BANKX-73163_BANKX-73866_from_version/bankx-v16.13.0-max">    
                <option value="dhoang_BANKX-73163_BANKX-73926_from_version/bankx-v16.13.0-max">   
                <option value="dhoang_BANKX-73163_BANKX-74078_from_version/bankx-v16.14.0-max">   
                <option value="dhoang_BANKX-73163_BANKX-74081_from_version/bankx-v16.14.0-max">   
                <option value="dhoang__BANKX-73163_from_version/bankx-v16.11.0-max"> 
                <option value="dhominh_BANKX-66611_BANKX-66616_from_version/bankx-v16.1.0-max">   
                <option value="dhominh_BANKX-69214_BANKX-69216_from_version/bankx-v16.11.0-max">  
                <option value="dhominh_BANKX-71012_BANKX-72470_from_version/bankx-v16.11.0-max"> 
                <option value="dhominh_BANKX-72029_BANKX-72030_from_version/bankx-v16.10.0-max">  
                <option value="dhominh_BANKX-72905_BANKX-73398_from_version/bankx-v16.13.0-max">  
                <option value="dnyotue_BANKX-70106_BANKX-70107_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70106_BANKX-70110_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70161_BANKX-70254_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70223_BANKX-70224_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70225_BANKX-70226_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70268_BANKX-70269_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70268_BANKX-70270_from_version/bankx-v16.11.0-max">  
                <option value="dnyotue_BANKX-70560_BANKX-70561_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70633_BANKX-70634_from_version/bankx-v16.6.0-max">  
                <option value="dnyotue_BANKX-70633_BANKX-70634_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-70758_BANKX-70759_from_version/bankx-v16.6.0-max">  
                <option value="dnyotue_BANKX-70758_BANKX-70759_from_version/bankx-v16.8.0-max">  
                <option value="dnyotue_BANKX-70773_BANKX-71138_from_version/bankx-v16.9.0-max"> 
                <option value="dnyotue_BANKX-70965_BANKX-70966_from_version/bankx-v16.9.0-max">  
                <option value="dnyotue_BANKX-71024_BANKX-71025_from_version/bankx-v16.8.0-max">   
                <option value="dnyotue_BANKX-71073_BANKX-71074_from_version/bankx-v16.3.0-max">   
                <option value="dnyotue_BANKX-71229_BANKX-71553_from_version/bankx-v16.9.0-max">  
                <option value="dnyotue_BANKX-71624_BANKX-71625_from_version/bankx-v16.9.0-max">  
                <option value="dnyotue_BANKX-71682_BANKX-71683_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-71689_BANKX-72426_from_version/bankx-v16.9.0-max">  
                <option value="dnyotue_BANKX-71993_BANKX-71994_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-72020_BANKX-72021_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-72133_BANKX-72134_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-72133_BANKX-72134_from_version/bankx-v16.9.0-max">  
                <option value="dnyotue_BANKX-72545_BANKX-72546_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-72587_BANKX-72588_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-72587_BANKX-72588_from_version/bankx-v16.11.0-max">  
                <option value="dnyotue_BANKX-72587_BANKX-73810_from_version/bankx-v16.13.0-max"> 
                <option value="dnyotue_BANKX-72628_BANKX-72629_from_version/bankx-v16.10.0-max">   
                <option value="dnyotue_BANKX-72634_BANKX-72635_from_version/bankx-v16.11.0-max">  
                <option value="dnyotue_BANKX-73021_BANKX-73022_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-73021_BANKX-73022_from_version/bankx-v16.11.0-max">  
                <option value="dnyotue_BANKX-73178_BANKX-73179_from_version/bankx-v16.12.0-max">  
                <option value="dnyotue_BANKX-73517_BANKX-73518_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue_BANKX-73589_BANKX-73590_from_version/bankx-v16.10.0-max">  
                <option value="dnyotue_BANKX-74351_BANKX-74352_from_version/bankx-v16.13.0-max">  
                <option value="dnyotue__BANKX-BANKX-70270_from_version/bankx-v16.11.0-max">  
                <option value="dnyotue__BANKX-test_70169_from_version/bankx-v16.7.0-max">  
                <option value="dnyotue__BANKX-test_verif_on_70169_from_version/bankx-v16.7.0-max">  
                <option value="elabreuille_BANKX-65656_BANKX-65657_from_version/bankx-v15.4.0-max">  
                <option value="elabreuille_BANKX-66482_BANKX-66483_from_version/bankx-v16.3.0-max">  
                <option value="elabreuille_BANKX-66830_BANKX-66831_from_version/bankx-v16.3.0-max">  
                <option value="elabreuille_BANKX-68930_BANKX-68931_from_version/bankx-v16.3.0-max">  
                <option value="elabreuille_BANKX-69182_BANKX-69183_from_version/bankx-v16.3.0-max">  
                <option value="elabreuille_BANKX-69373_BANKX-69374_from_version/bankx-v16.6.0-max">  
                <option value="elabreuille_BANKX-69641_BANKX-69642_from_version/bankx-v16.3.0-max">  
                <option value="elabreuille_BANKX-69682_BANKX-69683_from_version/bankx-v16.7.0-max">  
                <option value="elabreuille_BANKX-69887_BANKX-69888_from_version/bankx-v16.7.0-max">  
                <option value="elabreuille_BANKX-70970_BANKX-70971_from_version/bankx-v16.9.0-max">                 
                <option value=" labreuille_BANKX-71004_BANKX-71116_from_version/bankx-v16.9.0-max">                 
                <option value="elabreuille_BANKX-71337_BANKX-71338_from_version/bankx-v16.3.0-max">                 
                <option value="elabreuille_BANKX-71665_BANKX-71666_from_version/bankx-v16.10.0-max"> 
                <option value="elabreuille_BANKX-71751_BANKX-71752_from_version/bankx-v16.7.0-max">                 
                <option value="elabreuille_BANKX-71970_BANKX-71971_from_version/bankx-v16.10.0-max"> 
                <option value="elabreuille_BANKX-72153_BANKX-72154_from_version/bankx-v16.10.0-max"> 
                <option value="elabreuille_BANKX-73390_BANKX-73391_from_version/bankx-v16.10.0-max"> 
                <option value="elabreuille_BANKX-73406_BANKX-73407_from_version/bankx-v16.13.0-max">                 
                <option value="elabreuille_BANKX-73406_BANKX-73413_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-73451_BANKX-73452_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-73536_BANKX-73537_from_version/bankx-v16.12.0-max"> 
                <option value="elabreuille_BANKX-73536_BANKX-73548_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-73821_BANKX-73822_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-73852_BANKX-74296_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-74040_BANKX-74041_from_version/bankx-v16.12.0-max"> 
                <option value="elabreuille_BANKX-74224_BANKX-74225_from_version/bankx-v16.11.0-max"> 
                <option value="elabreuille_BANKX-74255_BANKX-74256_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille_BANKX-74255_BANKX-74259_from_version/bankx-v16.14.0-max"> 
                <option value="elabreuille_BANKX-74469_BANKX-74470_from_version/bankx-v16.13.0-max"> 
                <option value="elabreuille__BANKX-69560bis_from_version/bankx-v16.7.0-max">              
                <option value="fbabaci_BANKX-68405_BANKX-71046_from_version/bankx-v16.6.0-max">                 
                <option value="fbabaci_BANKX-69718_BANKX-69719_from_version/bankx-v16.7.0-max">                 
                <option value="fbabaci_BANKX-69981_BANKX-69982_from_version/bankx-v16.7.0-max"> 
                <option value="fbabaci_BANKX-69983_BANKX-69984_from_version/bankx-v16.7.0-max">                 
                <option value="fbabaci_BANKX-70672_BANKX-70673_from_version/bankx-v16.3.0-max"> 
                <option value="fbabaci_BANKX-70795_BANKX-70796_from_version/bankx-v16.7.0-max"> 
                <option value="fbabaci_BANKX-71030_BANKX-71031_from_version/bankx-v16.3.0-max">                 
                <option value="fbabaci_BANKX-71208_BANKX-71209_from_version/bankx-v16.9.0-max">                 
                <option value="fbabaci_BANKX-72255_BANKX-72967_from_version/bankx-v16.12.0-max">
                <option value="fbabaci_BANKX-72442_BANKX-72993_from_version/bankx-v16.11.0-max">
                <option value="fbabaci_BANKX-72442_BANKX-73032_from_version/bankx-v16.12.0-max">
                <option value="fbabaci_BANKX-72484_BANKX-72541_from_version/bankx-v16.10.0-max">
                <option value="fbabaci_BANKX-72507_BANKX-73028_from_version/bankx-v16.11.0-max">
                <option value="fbabaci_BANKX-72661_BANKX-72662_from_version/bankx-v16.10.0-max">
                <option value="fbabaci_BANKX-72812_BANKX-72813_from_version/bankx-v16.10.0-max">
                <option value="fbabaci_BANKX-72812_BANKX-72879_from_version/bankx-v16.12.0-max">
                <option value="fbabaci_BANKX-73010_BANKX-73011_from_version/bankx-v16.10.0-max">
                <option value="fbabaci_BANKX-73088_BANKX-73090_from_version/bankx-v16.11.0-max">
                <option value="fbabaci_BANKX-73088_BANKX-73581_from_version/bankx-v16.11.0-max">
                <option value="fbabaci_BANKX-73088_BANKX-74045_from_version/bankx-v16.12.0-max">
                <option value="fbabaci_BANKX-73088_BANKX-74047_from_version/bankx-v16.13.0-max">
                <option value="fbabaci_BANKX-73088_BANKX-74057_from_version/bankx-v16.14.0-max">
                <option value="fbabaci_BANKX-73529_BANKX-73530_from_version/bankx-v16.10.0-max">
                <option value="fbabaci_BANKX-73821_BANKX-73822_from_version/bankx-v16.13.0-max">
                <option value="flenin_BANKX-65255_BANKX-65256_from_version/bankx-v16.1.0-max"> 
                <option value="flenin_BANKX-65578_BANKX-65579_from_version/bankx-v15.3.0-max"> 
                <option value="flenin_BANKX-66376_BANKX-66377_from_version/bankx-v16.2.0-max"> 
                <option value="flenin_BANKX-66425_BANKX-66426_from_version/bankx-v16.1.0-max"> 
                <option value="flenin_BANKX-66646_BANKX-66647_from_version/bankx-v16.2.0-max"> 
                <option value="flenin_BANKX-67347_BANKX-67348_from_version/bankx-v16.3.0-max"> 
                <option value="flenin_BANKX-67527_BANKX-67528_from_version/bankx-v16.3.0-max"> 
                <option value="flenin_BANKX-67993_BANKX-67994_from_version/bankx-v16.3.0-max"> 
                <option value="flenin_BANKX-68087_BANKX-68088_from_version/bankx-v16.1.0-max"> 
                <option value="flenin_BANKX-68087_BANKX-68208_from_version/bankx-v16.4.0-max"> 
                <option value="flenin_BANKX-68360_BANKX-71265_from_version/bankx-v16.10.0-max">
                <option value="flenin_BANKX-68515_BANKX-68516_from_version/bankx-v16.3.0-max"> 
                <option value="flenin_BANKX-68578_BANKX-68579_from_version/bankx-v16.6.0-max">                 
                <option value="flenin_BANKX-68719_BANKX-68720_from_version/bankx-v16.5.0-max"> 
                <option value="flenin_BANKX-69509_BANKX-69703_from_version/bankx-v16.9.0-max"> 
                <option value="flenin_BANKX-69616_BANKX-69617_from_version/bankx-v16.7.0-max"> 
                <option value="flenin_BANKX-69628_BANKX-69757_from_version/bankx-v16.7.0-max"> 
                <option value="flenin_BANKX-69641_BANKX-69658_from_version/bankx-v16.6.0-max"> 
                <option value="flenin_BANKX-70221_BANKX-70450_from_version/bankx-v16.8.0-max"> 
                <option value="flenin_BANKX-70700_BANKX-72452_from_version/bankx-v16.10.0-max">
                <option value="flenin_BANKX-71037_BANKX-71038_from_version/bankx-v16.6.0-max"> 
                <option value="flenin_BANKX-71059_BANKX-71060_from_version/bankx-v16.9.0-max"> 
                <option value="flenin_BANKX-71830_BANKX-71831_from_version/bankx-v16.10.0-max">
                <option value="flenin_BANKX-72198_BANKX-72199_from_version/bankx-v16.11.0-max">
                <option value="flenin_BANKX-72552_BANKX-72553_from_version/bankx-v16.11.0-max">
                <option value="flenin__BANKX-71831_2_from_version/bankx-v16.10.0-max">
                <option value="flenin__BANKX-fl_16402_from_version/bankx-v16.1.0-max">
                <option value="flenin__BANKX-fl_1640_from_version/bankx-v16.3.0-max"> 
                <option value="flenin__BANKX-test_from_version/bankx-v14.11.0-max">
                <option value="fusion_73157_73066">
                <option value="galcaraz_BANKX-72838_BANKX-72839_from_version/bankx-v16.8.0-max">
                <option value="galcaraz__BANKX-16_10_from_version/bankx-v16.10.0-max">
                <option value="galcaraz_testsandbox">
                <option value="lganafio_BANKX-64429_BANKX-64430_from_version/bankx-v15.0.0-max">
                <option value="lganafio_BANKX-64494_BANKX-64495_from_version/bankx-v16.0.0-max"> 
                <option value="lganafio_BANKX-64498_BANKX-64499_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64519_BANKX-64520_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64569_BANKX-64570_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64585_BANKX-64586_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64585_BANKX-64648_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64859_BANKX-64860_from_version/bankx-v16.0.0-max">
                <option value="lganafio_BANKX-64880_BANKX-64881_from_version/bankx-v16.0.0-max"> 
                <option value="lganafio_BANKX-64882_BANKX-64883_from_version/bankx-v16.0.0-max"> 
                <option value=" ganafio_BANKX-64934_BANKX-65053_from_version/bankx-v15.3.0-max">
                <option value="lganafio_BANKX-65337_BANKX-65352_from_version/bankx-v16.1.0-max">
                <option value="ganafio_BANKX-65652_BANKX-65653_from_version/bankx-v15.3.0-max">
                <option value="lganafio_BANKX-66380_BANKX-66381_from_version/bankx-v16.2.0-max">
                <option value="lganafio_BANKX-66826_BANKX-66827_from_version/bankx-v16.2.0-max">
                <option value="lganafio_BANKX-67614_BANKX-68318_from_version/bankx-v16.7.0-max">
                <option value="lganafio_BANKX-68045_BANKX-68196_from_version/bankx-v16.4.0-max">
                <option value="lganafio_BANKX-68428_BANKX-68429_from_version/bankx-v16.2.0-max">
                <option value="lganafio_BANKX-68797_BANKX-68798_from_version/bankx-v16.6.0-max">
                <option value="lganafio_BANKX-68834_BANKX-68836_from_version/bankx-v16.5.0-max">
                <option value="lganafio_BANKX-69784_BANKX-69786_from_master">
                <option value="lganafio_BANKX-70203_BANKX-70204_from_version/bankx-v16.7.0-max">            
                <option value="lganafio_BANKX-73086_BANKX-73087_from_version/bankx-v16.12.0-max">
                <option value="lganafio_BANKX-73418_BANKX-73419_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-73451_BANKX-73452_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-73553_BANKX-73555_from_version/bankx-v16.12.0-max">
                <option value="lganafio_BANKX-73774_BANKX-73775_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-74063_BANKX-74064_from_version/bankx-v16.12.0-max">
                <option value="lganafio_BANKX-74063_BANKX-74387_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-74095_BANKX-74096_from_version/bankx-v16.14.0-max">
                <option value="lganafio_BANKX-74099_BANKX-74100_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-74224_BANKX-74225_from_version/bankx-v16.11.0-max">
                <option value="lganafio_BANKX-74340_BANKX-74341_from_version/bankx-v16.13.0-max">
                <option value="lganafio_BANKX-74340_BANKX-74450_from_version/bankx-v16.14.0-max">
                <option value="ljoe_BANKX-63008_BANKX-65319_from_version/espaceflux_sg">
                <option value="llepie_BANKX-68405_BANKX-71046_from_version/bankx-v16.6.0-max">
                <option value="llepie_BANKX-70161_BANKX-70162_from_version/bankx-v16.7.0-max">
                <option value="llepie_BANKX-70189_BANKX-70239_from_version/bankx-v16.7.0-max">
                <option value="llepie_BANKX-70214_BANKX-70215_from_master">
                <option value="llepie_BANKX-70229_BANKX-70230_from_version/bankx-v16.8.0-max">            
                <option value="llepie_BANKX-70305_BANKX-70306_from_version/bankx-v16.3.0-max">              
                <option value="llepie_BANKX-70600_BANKX-70615_from_version/bankx-v16.7.0-max">             
                <option value="llepie_BANKX-71127_BANKX-71128_from_version/bankx-v16.7.0-max">             
                <option value="llepie_BANKX-71167_BANKX-71168_from_version/bankx-v16.6.0-max">                
                <option value="llepie_BANKX-71505_BANKX-71506_from_version/bankx-v16.9.0-max">            
                <option value="llepie_BANKX-71765_BANKX-71766_from_version/bankx-v16.10.0-max">                
                <option value="llepie_BANKX-72050_BANKX-72051_from_version/bankx-v16.10.0-max">                
                <option value="llepie_BANKX-72050_BANKX-72065_from_version/bankx-v16.10.0-max">                
                <option value="llepie_BANKX-72068_BANKX-72070_from_version/bankx-v16.9.0-max">              
                <option value="llepie_BANKX-72223_BANKX-72224_from_version/bankx-v16.11.0-max">                
                <option value="llepie_BANKX-72231_BANKX-73052_from_version/bankx-v16.11.0-max">                
                <option value="llepie_BANKX-72881_BANKX-72882_from_version/bankx-v16.10.0-max">                
                <option value="llepie_BANKX-73183_BANKX-73184_from_version/bankx-v16.12.0-max">                
                <option value="llepie_BANKX-73406_BANKX-73413_from_version/bankx-v16.13.0-max">
                <option value="llepie_BANKX-73835_BANKX-73836_from_version/bankx-v16.13.0-max">                
                <option value="llepie_BANKX-73838_BANKX-73839_from_version/bankx-v16.13.0-max">                
                <option value="llepie_BANKX-73838_BANKX-74011_from_version/bankx-v16.14.0-max">                
                <option value="llepie_BANKX-73937_BANKX-73953_from_version/bankx-v16.10.0-max">                
                <option value="llepie__BANKX-Test_from_version/bankx-v16.13.0-max">
                <option value="master">master</option>
                <option value="mlapierre_BANKX-63655_BANKX-63657_from_version/bankx-v16.0.0-max">
                <option value="mlapierre_BANKX-64617_BANKX-64618_from_version/bankx-v16.0.0-max">
                <option value="mlapierre_BANKX-64935_BANKX-64936_from_version/bankx-v14.13.0-max">
                <option value="mlapierre_BANKX-65371_BANKX-65372_from_version/bankx-v16.1.0-max">                
                <option value="mlapierre_BANKX-65371_BANKX-66432_from_version/bankx-v16.2.0-max">
                <option value="mlapierre_BANKX-65371_BANKX-67480_from_version/bankx-v16.4.0-max">
                <option value="mlapierre_BANKX-65459_BANKX-65460_from_version/bankx-v16.0.0-max">
                <option value="mlapierre_BANKX-65643_BANKX-65644_from_version/bankx-v16.1.0-max">
                <option value="mlapierre_BANKX-65750_BANKX-65751_from_version/bankx-v15.4.0-max">
                <option value="mlapierre_BANKX-66716_BANKX-66717_from_version/bankx-v16.2.0-max">
                <option value="mlapierre_BANKX-67311_BANKX-67312_from_version/bankx-v16.4.0-max">
                <option value="mlapierre_BANKX-68239_BANKX-68240_from_version/bankx-v16.1.0-max">
                <option value="mlapierre_BANKX-68239_BANKX-68240_from_version/bankx-v16.3.0-max">
                <option value="mlapierre_BANKX-68437_BANKX-68438_from_version/bankx-v16.5.0-max">
                <option value="mlapierre_BANKX-68492_BANKX-68493_from_version/bankx-v16.3.0-max">
                <option value="mlapierre_BANKX-68500_BANKX-68501_from_version/bankx-v16.6.0-max">
                <option value="mlapierre_BANKX-68558_BANKX-68559_from_version/bankx-v16.6.0-max">
                <option value="mlapierre_BANKX-68757_BANKX-68758_from_version/bankx-v16.5.0-max">
                <option value="mlapierre_BANKX-68761_BANKX-68762_from_version/bankx-v14.13.0-max">
                <option value="mlapierre_BANKX-68788_BANKX-68789_from_version/bankx-v16.6.0-max">
                <option value="mlapierre_BANKX-68884_BANKX-68885_from_version/bankx-v14.4.0-max">
                <option value="mlapierre_BANKX-69740_BANKX-69741_from_version/bankx-v16.7.0-max">
                <option value="mlapierre_BANKX-69900_BANKX-69901_from_version/bankx-v16.7.0-max">
                <option value="mlapierre_BANKX-70083_BANKX-70084_from_version/bankx-v16.6.0-max">
                <option value="mlapierre_BANKX-70083_BANKX-70088_from_version/bankx-v16.6.0-max">
                <option value="mlapierre_BANKX-70836_BANKX-70837_from_version/bankx-v16.10.0-max">
                <option value="mlapierre_BANKX-70836_BANKX-73857_from_version/bankx-v16.12.0-max">
                <option value="mlapierre_BANKX-70836_BANKX-73858_from_version/bankx-v16.13.0-max">
                <option value="mlapierre_BANKX-71127_BANKX-71131_from_version/bankx-v16.7.0-max">
                <option value="mlapierre_BANKX-71174_BANKX-71175_from_version/bankx-v16.9.0-max">
                <option value="mlapierre_BANKX-71979_BANKX-71980_from_version/bankx-v16.10.0-max">
                <option value="mlapierre_BANKX-72073_BANKX-72093_from_version/bankx-v16.8.0-max">
                <option value="mlapierre_BANKX-72153_BANKX-72154_from_version/bankx-v16.10.0-max">
                <option value="mlapierre_BANKX-72525_BANKX-72526_from_version/bankx-v16.10.0-max">
                <option value="mlapierre_BANKX-72615_BANKX-72616_from_master">
                <option value="mlapierre_BANKX-72775_BANKX-72776_from_version/bankx-v16.10.0-max">
                <option value="mlapierre_BANKX-72905_BANKX-73105_from_version/bankx-v16.12.0-max"> 
                <option value="mlapierre_BANKX-73055_BANKX-73056_from_version/bankx-v16.12.0-max"> 
                <option value="mlapierre_BANKX-73173_BANKX-73174_from_version/bankx-v16.12.0-max"> 
                <option value="mlapierre_BANKX-73852_BANKX-73853_from_version/bankx-v16.12.0-max"> 
                <option value="mlapierre_BANKX-73852_BANKX-74296_from_version/bankx-v16.13.0-max">
                <option value="mlapierre_BANKX-73933_BANKX-73934_from_version/bankx-v16.13.0-max">
                <option value="mlapierre_BANKX-73970_BANKX-73971_from_version/bankx-v16.13.0-max">
                <option value="mlapierre_BANKX-73970_BANKX-74054_from_version/bankx-v16.14.0-max">
                <option value="mlapierre_BANKX-74263_BANKX-74264_from_version/bankx-v16.14.0-max"> 
                <option value="mlapierre_BANKX-74288_BANKX-74289_from_version/bankx-v16.14.0-max">
                <option value="mlapierre_BANKX-74317_BANKX-74319_from_version/bankx-v16.14.0-max">
                <option value="mlapierre_BANKX-74347_BANKX-74348_from_version/bankx-v16.12.0-max">
                <option value="mlapierre__BANKX-68762_1660_from_version/bankx-v16.6.0-max">
                <option value="mnghe_BANKX-65643_BANKX-65644_from_version/bankx-v16.1.0-max">
                <option value="rchealy_BANKX-67988_BANKX-68005_from_version/bankx-v16.5.0-max">
                <option value="rchealy_BANKX-68529_BANKX-68530_from_version/bankx-v16.6.0-max">
                <option value="rchealy_BANKX-72302_BANKX-72303_from_version/bankx-v16.6.0-max">
                <option value="rchealy_BANKX-73553_BANKX-73913_from_version/bankx-v16.13.0-max">
                <option value="rchealy__BANKX-70583_from_version/bankx-v16.7.0-max">
                <option value="rranaivo_BANKX-49328_BANKX-49329_from_version/bankx-v16.4.0-max">
                <option value="rranaivo_BANKX-62755_BANKX-62757_from_version/4yeuxWF">
                <option value="rranaivo_BANKX-65755_BANKX-65756_from_version/bankx-v16.4.0-max">
                <option value="rranaivo_BANKX-65852_BANKX-65853_from_version/bankx-v16.0.0-max">
                <option value="rranaivo_BANKX-66118_BANKX-66119_from_version/bankx-v16.2.0-max">
                <option value="rranaivo_BANKX-66409_BANKX-66410_from_version/bankx-v16.1.0-max">
                <option value="rranaivo_BANKX-66763_BANKX-66764_from_version/bankx-v16.3.0-max"> 
                <option value="rranaivo_BANKX-66803_BANKX-66805_from_version/bankx-v15.4.0-max">
                <option value="rranaivo_BANKX-66803_BANKX-67054_from_version/bankx-v16.1.0-max">
                <option value="rranaivo_BANKX-67909_BANKX-67910_from_version/bankx-v16.1.0-max">
                <option value="rranaivo_BANKX-67983_BANKX-67984_from_version/bankx-v16.5.0-max">
                <option value="rranaivo_BANKX-68321_BANKX-68322_from_version/bankx-v16.5.0-max">
                <option value="rranaivo_BANKX-68386_BANKX-68387_from_version/bankx-v16.3.0-max">
                <option value="rranaivo_BANKX-70187_BANKX-70188_from_version/bankx-v16.8.0-max">
                <option value="rranaivo_BANKX-70196_BANKX-70197_from_version/bankx-v16.8.0-max">
                <option value="rranaivo_BANKX-70583_BANKX-70585_from_version/bankx-v16.7.0-max">
                <option value="rranaivo_BANKX-71050_BANKX-71051_from_version/bankx-v16.8.0-max">
                <option value="rranaivo_BANKX-71059_BANKX-71060_from_version/bankx-v16.9.0-max">            
                <option value="rranaivo_BANKX-71087_BANKX-73445_from_version/bankx-v16.13.0-max">
                <option value="rranaivo_BANKX-71087_BANKX-74025_from_version/bankx-v16.13.0-max"> 
                <option value="rranaivo_BANKX-71270_BANKX-71271_from_version/bankx-v16.10.0-max">
                <option value="rranaivo_BANKX-71270_BANKX-71368_from_version/bankx-v16.9.0-max">
                <option value="rranaivo_BANKX-71505_BANKX-71506_from_version/bankx-v16.10.0-max"> 
                <option value="rranaivo_BANKX-71505_BANKX-71506_from_version/bankx-v16.9.0-max"> 
                <option value="rranaivo_BANKX-71745_BANKX-71746_from_version/bankx-v16.10.0-max">
                <option value="rranaivo_BANKX-71789_BANKX-71790_from_version/bankx-v16.6.0-max">
                <option value="rranaivo_BANKX-72235_BANKX-72236_from_version/bankx-v16.10.0-max"> 
                <option value="rranaivo_BANKX-72243_BANKX-72244_from_version/bankx-v16.10.0-max">
                <option value="rranaivo_BANKX-72459_BANKX-73432_from_version/bankx-v16.12.0-max">
                <option value="rranaivo_BANKX-72885_BANKX-72886_from_version/bankx-v16.12.0-max">
                <option value="rranaivo_BANKX-72885_BANKX-72970_from_version/bankx-v16.12.0-max">
                <option value="rranaivo_BANKX-73041_BANKX-73042_from_version/bankx-v16.12.0-max">
                <option value="rranaivo_BANKX-73061_BANKX-73062_from_version/bankx-v16.12.0-max">
                <option value="rranaivo_BANKX-73066_BANKX-73195_from_version/bankx-v16.10.0-max">
                <option value="rranaivo_BANKX-73200_BANKX-73201_from_version/bankx-v16.11.0-max"> 
                <option value="rranaivo_BANKX-73649_BANKX-73651_from_version/bankx-v16.10.0-max"> 
                <option value="rranaivo_BANKX-73677_BANKX-73678_from_version/bankx-v16.11.0-max">
                <option value="rranaivo_BANKX-73729_BANKX-73902_from_version/bankx-v16.13.0-max">
                <option value="rranaivo_BANKX-73881_BANKX-73882_from_version/bankx-v16.11.0-max">
                <option value="rranaivo_BANKX-73905_BANKX-73907_from_version/bankx-v16.11.0-max">
                <option value="rranaivo_BANKX-74305_BANKX-74306_from_version/bankx-v16.14.0-max">
                <option value="rranaivo_BANKX-74332_BANKX-74333_from_version/bankx-v16.13.0-max">
                <option value="rranaivo_BANKX-74382_BANKX-74383_from_version/bankx-v16.10.0-max">
                <option value="skhim_BANKX-68920_BANKX-71776_from_version/bankx-v16.6.0-max">
                <option value="skhim_BANKX-68920_BANKX-71778_from_version/bankx-v16.10.0-max">
                <option value="slaschamps_BANKX-74205_BANKX-74267_from_version/bankx-v16.13.0-max">
                <option value="slaschamps_BANKX-74220_BANKX-74221_from_version/bankx-v16.11.0-max"> 
                <option value="slaschamps_BANKX-74224_BANKX-74225_from_version/bankx-v16.11.0-max">
                <option value="slaschamps_BANKX-74326_BANKX-74327_from_version/bankx-v16.14.0-max">
                <option value="slaschamps_BANKX-74445_BANKX-74446_from_version/bankx-v16.12.0-max">
                <option value="slaschamps__BANKX-74225_1413_from_version/bankx-v14.13.0-max">
                <option value="slaschamps__BANKX-74225_163_from_version/bankx-v16.3.0-max"> 
                <option value="slaschamps__BANKX-74225_168_from_version/bankx-v16.8.0-max">
                <option value="slorn_BANKX-68880_BANKX-68881_from_version/bankx-v16.6.0-max">
                <option value="slorn_BANKX-70836_BANKX-70837_from_version/bankx-v16.6.0-max">
                <option value="slorn_BANKX-73568_BANKX-73569_from_version/bankx-v16.12.0-max"> 
                <option value="slorn_BANKX-73821_BANKX-74393_from_version/bankx-v16.13.0-max">
                <option value="tgauthier_BANKX-72671_BANKX-73051_from_version/bankx-v16.12.0-max">
                <option value="tgauthier_BANKX-72905_BANKX-73153_from_version/bankx-v16.11.0-max">
                <option value="tgauthier_BANKX-73077_BANKX-73078_from_version/bankx-v16.12.0-max">
                <option value="tgauthier_BANKX-73187_BANKX-73480_from_version/bankx-v16.13.0-max">
                <option value="tgauthier_BANKX-73638_BANKX-73639_from_version/bankx-v16.13.0-max">
                <option value="tgauthier_BANKX-73647_BANKX-73648_from_version/bankx-v16.10.0-max">
                <option value="tgauthier_BANKX-73765_BANKX-73766_from_version/bankx-v16.13.0-max">
                <option value="tgauthier_BANKX-73765_BANKX-74251_from_version/bankx-v16.14.0-max">
                <option value="tgauthier_BANKX-73883_BANKX-73884_from_version/bankx-v16.10.0-max">
                <option value="tgauthier_BANKX-74040_BANKX-74041_from_version/bankx-v16.12.0-max">
                <option value="tgauthier_BANKX-74277_BANKX-74344_from_version/bankx-v16.14.0-max">
                <option value="thok_BANKX-70667_BANKX-70668_from_version/bankx-v16.9.0-max">
                <option value="tnguyenvan_BANKX-66209_BANKX-66210_from_version/bankx-v16.2.0-max">
                <option value="tnguyenvan_BANKX-66915_BANKX-66916_from_version/bankx-v16.2.0-max">
                <option value="tnguyenvan_BANKX-68985_BANKX-68986_from_version/bankx-v16.5.0-max">
                <option value="tnguyenvan_BANKX-72779_BANKX-72780_from_version/bankx-v16.12.0-max">
                <option value="tnguyenvan_BANKX-73894_BANKX-73895_from_version/bankx-v16.10.0-max">
                <option value="tnguyenvan_BANKX-73894_BANKX-73944_from_version/bankx-v16.11.0-max">
                <option value="version/bankx-v14.11.0-max">
                <option value="version/bankx-v14.12.0-max">
                <option value="version/bankx-v14.13.0-max">
                <option value="version/bankx-v14.4.0-max">
                <option value="version/bankx-v15.0.0-max">
                <option value="version/bankx-v15.1.0-max">
                <option value="version/bankx-v15.2.0-max">
                <option value="version/bankx-v15.3.0-max">
                <option value="version/bankx-v15.4.0-max">
                <option value="version/bankx-v15.4.0.62407">
                <option value="version/bankx-v16.0.0-max">
                <option value="version/bankx-v16.10.0-max">
                <option value="version/bankx-v16.11.0-max">
                <option value="version/bankx-v16.12.0-max">
                <option value="version/bankx-v16.13.0-max">
                <option value="version/bankx-v16.14.0-max">
                <option value="version/bankx-v16.15.0-max">
                <option value="version/bankx-v16.2.0-max"> 
                <option value="version/bankx-v16.3.0-max">
                <option value="version/bankx-v16.4.0-max">
                <option value="version/bankx-v16.5.0-max">
                <option value="version/bankx-v16.6.0-max">
                <option value="version/bankx-v16.7.0-max">
                <option value="version/bankx-v16.8.0-max"> 
                <option value="version/bankx-v16.9.0-max">
                <option value="version/espaceflux_sg">
                <option value="zbouali_BANKX-68947_BANKX-68948_from_version/bankx-v16.6.0-max">
                <option value="zbouali_BANKX-68951_BANKX-68952_from_version/bankx-v16.6.0-max">
                <option value="zbouali_BANKX-69182_BANKX-69183_from_version/bankx-v16.3.0-max">
                <option value="zbouali_BANKX-69572_BANKX-69573_from_version/bankx-v16.7.0-max">
                <option value="zbouali_BANKX-69877_BANKX-69878_from_version/bankx-v16.6.0-max">
                <option value="zbouali_BANKX-70653_BANKX-70655_from_version/bankx-v16.6.0-max">
                <option value="zbouali_BANKX-71563_BANKX-71564_from_version/bankx-v16.10.0-max">
                <option value="zbouali_BANKX-71563_BANKX-71564_from_version/bankx-v16.9.0-max "> 
                
    </datalist>
        <br>
        <input type="text" name="nomBranche" placeholder="Nom de la nouvelle branche">
        <br>
        <button type="submit" name="submit">Fusionner les branches</button>
    </form>
</body>
</html>