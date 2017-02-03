@extends('layouts.master')

@section('content')
        <!-- Styles -->
        <style>
            @media (min-width: 768px) {
	           	html, body {
	                overflow:hidden;
	                height: 100%;
	                margin: 0;
	            }

            	#terms {
	            	overflow-y: scroll;
	            	position: absolute;
	            	top:80px;
	            	bottom: 0;
	            	left:0;
            	}

            	#main-study {
	            	overflow-y:scroll;
	            	position:absolute;
	            	top:80px;
	            	bottom:0;
	            	right:0;
            	}
            }

            #terms {
            	height:100%;
            	background: lavender;
            	color: black;
            	padding-bottom: 80px;
            }

            #terms dt {
            	margin-top: 10px;
            }

            #main-study {
            	height:100%;
            	padding-bottom:80px;
            }

            #main-study h3 {
            	padding:10px;
            	margin: 0;
            	background-color: lavender;
            	color: black;
            }
        </style>

	<h1>Nutrition Test Notes (Chapter 9)</h1>

<div class="col-sm-3" id="terms">
	<dl>
		<dt>Adequate Intakes (AIs)</dt>
		<dd>Best estimates of nutritional needs.</dd>
		<dt>Amino acids</dt>
		<dd>The building blocks of protein.</dd>
		<dt>Anemia</dt>
		<dd>Iron deficiency disease that results from the body's inability to produce hemoglobin.</dd>
		<dt>Appetite</dt>
		<dd>The desire to eat; normally accompanies hunger but is more psychological than physiological.</dd>
		<dt>Calorie</dt>
		<dd>A unit of measure that indicates the amount of energy obtained from a particular food.</dd>
		<dt>Carbohydrates</dt>
		<dd>Basic nutrients that supply the body with the energy needed to sustain normal activity.</dd>
		<dt>Cellulose</dt>
		<dd>Fiber; a major form of complex carbohydrates.</dd>
		<dt>Cholesterol</dt>
		<dd>A form of fat circulating in the blood that can accumulate on the inner walls of arteries.</dd>
		<dt>Complete (high-quality) proteins</dt>
		<dd>Proteins that contain all of the nine essential amino acids.</dd>
		<dt>Complex carbohydrates</dt>
		<dd>A major type of carbohydrate, which provides sustained energy.</dd>
		<dt>Dehydration</dt>
		<dd>Abnormal depletion of body fluids; a result of lack of water.</dd>
		<dt>Digestive process</dt>
		<dd>The process by which foods are broken down and either absorbed or excreted by the body.</dd>
		<dt>Disaccharide</dt>
		<dd>A combination of two monosaccharides.</dd>
		<dt>Esophogus</dt>
		<dd>Tube that transports food from the mouth to the stomach.</dd>
		<dt>Essential amino acids</dt>
		<dd>The nine basic nitrogen-containing building blocks of protein that must be obtained from foods to ensure health</dd>
		<dt>Fats</dt>
		<dd>Basic nutrients composed of carbon and hydrogen atoms; needed for the proper functioning of cells, insulation of body organs against shock, maintenance of body temperature, and healthy skin and hair.</dd>
		<dt>Food allergies</dt>
		<dd>Overreaction by the body to normally harmless proteins, which are perceived as allergens.  In response, the body produces antibodies, triggering allergic symptoms.</dd>
		<dt>Food intolerance</dt>
		<dd>Adverse effects resulting when people who lack the digestive chemicals needed to break down certain substances eat those substances.</dd>
		<dt>Food irradiation</dt>
		<dd>Treating foods with gamma radiation from radioactive cobalt, cesium, or some other source of x-rays to kill microorganisms.</dd>
		<dt>Folate</dt>
		<dd>A type of vitamin B that is believed to decrease levels of homocysteine, an amino acid that has been linked to vascular diseases.</dd>
		<dt>Glycogen</dt>
		<dd>The polysaccharide form in which glucose is stored in the liver</dd>
		<dt>Hemochromatosis</dt>
		<dd>Iron toxicity due to excess consumption.</dd>
		<dt>High-density lipoproteins (HDLs)</dt>
		<dd>Compounds that facilitate the transport of cholesterol in the blood to the liver for metabolism and elimination from the body.</dd>
		<dt>Hunger</dt>
		<dd>The feeling associated with the physiological need to eat.</dd>
		<dt>Hypervitaminosis</dt>
		<dd>A toxic condition caused by overuse of vitamin supplements.</dd>
		<dt>Incomplete proteins</dt>
		<dd>Proteins that are lacking in one or more of the essential amino acids.</dd>
		<dt>Low-density lipoproteins (LDLs)</dt>
		<dd>Compounds that facilitate the transport of cholesterol in the blood to the body's cell.</dd>
		<dt>Macrominerals</dt>
		<dd>Minerals that the body needs in fairly large amounts.</dd>
		<dt>Minerals</dt>
		<dd>Inorganic, indestructible elements that aid physiological processes.</dd>
		<dt>Monosaccharide</dt>
		<dd>A simple sugar that contains only one molecule of sugar.</dd>
		<dt>Nutrients</dt>
		<dd>The constituents of food that sustain us physiologically: proteins, carbohydrates, fats, vitamins, minerals, and water.</dd>
		<dt>Nutrition</dt>
		<dd>The science that investigates the relationship between physiological function and the essential elements of foods eaten.</dd>
		<dt>Pica</dt>
		<dd>Iron deficiency disease characterized by craving for certain foods and substances.</dd>
		<dt>Plaque</dt>
		<dd>Cholesterol buildup on the inner walls of arteries, causing a narrowing of the channel through which blood flows; a major cause of artherosclerosis.</dd>
		<dt>Polysaccharide</dt>
		<dd>A complex carbohydrate formed by the combination of long chains of saccharides.</dd>
		<dt>Proteins</dt>
		<dd>The essential constituents of nearly all body cells; necessary for the development and repair of bone, muscle, skin, and blood; the key elements of antibodies, enzymes, and hormones.</dd>
		<dt>Recommended Dietary Allowances (RDAs)</dt>
		<dd>The average daily intakes of energy and nutrients considered adequate to meet the needs of most healthy people in the United States under usual conditions.</dd>
		<dt>Saliva</dt>
		<dd>Fluid secreted by the salivary glands; enzymes in the fluid aid in the breakdown of certain foods for digestion.</dd>
		<dt>Saturated fats</dt>
		<dd>Fats that are unable to hold any more hydrogen in their chemical structure; derived mostly from animal sources; solid at room temperature.</dd>
		<dt>Simple sugar</dt>
		<dd>A major type of carbohydrate, which provides short-term energy.</dd>
		<dt>Small intestine</dt>
		<dd>Muscular, coiled digestive organ; consists of the duodenum, jejunum, and ileum.</dd>
		<dt>Stomach</dt>
		<dd>Large muscular organ that temporarily stores, mixes, and digests food.</dd>
		<dt>Trace minerals</dt>
		<dd>Minerals that the body needs in only very small amounts.</dd>
		<dt>Trans-fatty acids</dt>
		<dd>Fatty acids that are produced when polyunsaturated oils are hydrogenated to make them more solid.</dd>
		<dt>Triglyceride</dt>
		<dd>The most common form of fat in the body; excess calories consumed are converted into triglycerides and stored as body fat.</dd>
		<dt>Unsaturated fats</dt>
		<dd>Fats that do have room for more hydrogen in their chemical structure; derived mostly from plants; liquid at room temperature.</dd>
		<dt>Vegetarian</dt>
		<dd>A term with a variety of meanings: vegans avoid all foods of animal origin; lacto-vegetarians avoid flesh foods but eat dairy products; ovo-vegetarians avoid flesh foods but eat eggs; lacto-ovo-vegetarians avoid flesh foods but eat both dairy products and eggs; pesco-vegetarians avoid meat but eat fish, dairy products, and eggs; semivegetarians eat chicken, fish, dairy products, and eggs.</dd>
		<dt>Vitamins</dt>
		<dd>Essential organic compounds that promote growth and reproduction and help maintain life and health.</dd>
	</dl>
</div>

<div class="col-sm-9" id="main-study">
	<h3>How Important is Nutrition?</h3>
	<p>The nutritional choices you make during college can have both immediate and lasting effects on your health.  Thousands of studies associate what we eat with chronic diseases such as diabetes, heart disease, hypertension, stroke, osteoporosis, and many types of cancer.</p>

	<p>A landmark review of over 4,500 research studies concluded that widespread consumption of 5 to 6 servings of fruits and vegetables per day would lower cancer rates by over 20% worldwide (American Institute Of Cancer Research, 1997).</p>

</div>
@endsection