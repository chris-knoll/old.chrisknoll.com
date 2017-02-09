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

	<h3>6 Classes of Essential Nutrients</h3>
	<p>Macronutrients: Carbohydrates, Proteins, Lipids, Water</p>
	<p>Micronutrients: Vitamins, Minerals</p>
	<p>Carbs, proteins, fats, and vitamins are carbon containing.  All but vitamins are calorie containing.</p>

	<h3>Acceptable Macronutrient Distribution Ranges (AMDRs)</h3>

	<p>Recommended protein, carbohydrate, and fat intake ranges to decrease disease risk and provide diet flexibility</p>

	<p>Percentages of total calories</p>
	<ul>
		<li>10–35% of calories from protein</li>
		<li>45–65% of calories from carbohydrates</li>
		<li>20–35% of calories from fat (&lt;10% from saturated fat)</li>
	</ul>

	<h3>Caloric Needs</h3>
	<p>Approximately 2000 calories per day meets the energy needs of most people.</p>

	<p>3 nutrients supply energy</p>
	<ul>
		<li>Fat = 9 calories per gram</li>
		<li>Protein = 4 calories per gram</li>
		<li>Carbohydrates = 4 calories per gram</li>
		<li>Alcohol = 7 calories per gram (not essential)</li>
	</ul>

	<h3>Water</h3>
	The human body consists of 50-70% water by weight.

	DRI = How many cups of total water from all beverages and foods each day are recommended for…
	Women:
	Men:
	Individual needs for water vary drastically
	Approximately ½ your body weight in ounces depending on…
	Do caffeinated beverages cause dehydration?

	<h3>Proteins</h3>
	List the functions of proteins:

	Amino Acids (building blocks of proteins):

	Twenty common amino acids.

	Nine essential amino acids.
	Eleven nonessential amino acids

	Complete proteins (high quality) provide all essential amino acids.
	Animal Sources (meats and dairy)

	Incomplete proteins lack 1-2 essential amino acids
	Best Plant Sources (beans, peas, and nuts)

	Complimentary proteins (See Figure 9.1—pg 265)
	Recommended protein intake:

	10-35% of total calorie intake
	More specifically, .8 grams per kilogram of body weight

	How much do you weigh in kilograms?
	(body weight in lbs divided by 2.2 = body weight in kilograms)

	<h3>Carbohydrates</h3>
	Best fuel for moderate to intense exercise—readily broken down to glucose.

	Fuel for the brain, nervous system, body and body’s cells

	Simple Carbohydrates
	Fruits, many vegetables and sweets 

	Complex Carbohydrates
	Grains, cereals, and vegetables

	<h5>Complex vs Simple Carbohydrates/Sugars</h5>
	Simple Carbohydrates (sugars)
	One or two sugar units (mono and disaccharides)
	Fruit, sugar, honey, malt, and milk
	Glucose, fructose, sucrose, lactose, maltose

	Complex Carbohydrates (starches and fiber)
	Multiple sugar units (polysaccharides)
	Starches and fiber
	Grains – wheat, rye, rice, oats, barley, and millet
	Legumes – dry beans, peas, and lentils
	Tubers – potatoes and yams…
	Cruciferous vegetables—broccoli, cauliflower, cabbage, Brussels sprouts
	Dark leafy green, dark orange, yellow, and red vegetables and some fruits

	Adults require 45-65% of total daily calories 	or 225-325 grams in carbohydrates within a 2,000 calorie diet.
	Simple carbohydrates = 10%
	Complex carbohydrates = 50%

	What is glycogen?

	Where do we store glycogen?

	World Health Organization (WHO)–recommends 	a limit of 10% of total calories from added 	sugars—simple carbohydrates.

	<h3>Complex Carb: Fiber</h3>
	Often referred to as “bulk or roughage”

	Sources (all plant substances):
	 
	Recommended intake
	25-38 grams per day for most people
	From foods not supplements

	Dietary fiber—indigestible parts of plants
	Functional fiber—from plants or manufactured
	Soluble fibers—dissolve in water
	Insoluble fibers—do not dissolve in water

	Possible Benefits of Fiber
	May reduce risk of…

	colon and rectal cancer
	constipation
	heart disease
	type 2 diabetes
	obesity

	What can you do to “bulk up” your fiber intake?
		(See Skills for Behavior Change, pg 267)

	<h3>Fats / Lipids</h3>
	Most concentrated source of energy
	Stored energy and provides insulation and support for body organs; additional functions include:

	Cholesterol— 5% of body fat
	Triglycerides— 95% of body fat

	Saturated Fat—less than 10% of diet
	Monounsaturated—10 % of diet
	Polyunsaturated—10 % of diet
	Hydrogenation—produces trans-fats
	Trans fatty acids—should be avoided

	Explain the difference between HDLs and LDLs:

	Where do you get saturated fats and why should they be limited in the diet?

	Where do you get healthy unsaturated fats and why are they beneficial?

	Why should you limit trans fatty acids in the diet?

	Do health experts recommend adding coconut oil to you diet?  Why or why not?

	<h3>Vitamins</h3>
	Organic substances used to regulate body processes; catalysts
	 (See Table 9.2—pg 270)

	Fat-soluble (stored)
	A, D, E, K

	Water-soluble (flushed, not stored)
	B-complex and C

	<h3>Minerals</h3>
	Inorganic substances used to regulate body processes and maintain body tissue
	(See Tables 9.3—pg 271)

	Major minerals:

	Trace minerals:

	Sodium, Calcium and Iron need special attention

	<h3>Beneficial Non-Nutrient Components of Foods</h3>
	Antioxidants and phytochemicals appear to protect people from the ravages of oxidative stress, tissue damage, and chronic disease.

	Vitamin C, Vitamin E, selenium

	Carotenoids, Polyphenols, Flavonoids and more…
	Part of the red, orange and yellow pigments found in fruits and vegetables
	Beta-carotene, lycopene, lutein

	<h3>Phytochemicals (image)</h3>

	<h3>Choosing a Healthy Diet</h3>
	Variety—foods from different food groups; diverse foods within each food group.

	Balance—balance your choices; a diet that provides enough without excess; balance low fiber with high fiber, high fat with low-fat, or being sedentary with physical activity.

	Moderation—don’t overdo it; not too many calories, alcohol, sodium, saturated fats, or sugar.  Practice portion control.  Moderation allows you to balance your diet and eat a variety of foods.

	Nutrient density—focus on foods high in vitamins and minerals compared to calories

	<h3>Dietary Guidelines for Americans, 2010</h3>
	Balance calories to manage weight

	Food and food components to reduce (list):

	Foods and nutrients to increase (list):

	Build healthy eating patterns

	<h3>MyPlate Food Guidance System</h3>
	Eat Nutrient-Dense Foods:


	Reduce Empty Calorie Foods:


	Physical Activity:

	<h3>Empty Calories</h3>
	One third of the calories American consume come from junk foods with no nutritional value, such as sweets, soft drinks, and alcoholic beverages

	Sugar and fat laden foods do little to nourish your body.

	<h3>Eating patterns</h3>
	DASH
	Focus on potassium, calcium, magnesium, protein, and fiber
	Plentiful in fruits and vegetables, whole grains, low-fat dairy, fish, poultry, seeds, and nuts

	Mediterranean
	Based on fruits, vegetables, grains, olive oil, beans, nuts, and seeds
	Moderate portions of cheese and yogurt
	Fish and seafood at least twice a week
	Poultry and eggs every few days
	Red meat and sweets less often

	<h3>Reading labels</h3>
	Serving Size—number of servings in the package

	Calories and Calories from Fat—high in calories from fat?

	Daily Values—
	based on 2,000 calories
	5% or less is low
	20% or more is high

	Nutrients
	Limit total fat, saturated fat, cholesterol and sodium
	Focus on dietary fiber, vitamin A, calcium and iron

	<h3>Understanding Serving Sizes</h3>
	How does a serving differ from a portion?

	What does one serving of peanut butter look like?

	What does one serving of fresh fruit look like?

	What does one serving of cereal look like?

	What does one serving of rice or pasta look like?

	What does one serving of ice cream look like?

	<h3>Dietary Supplements</h3>
	The Academy of Nutrition and Dietetics recommends that, though some people benefit from taking supplements, a healthy diet is the best way to give your body what it needs.

	Dietary supplements are not regulated like other food and drug products

	The FDA does not evaluate the safety and efficacy of supplements prior to marketing.

	Many contradictory studies in this area

	<h3>Eating Well in College</h3>
	Know nutrient density of various fast foods—ask for nutritional analyses

	Order salads—dressings on the side

	Avoid giant portion sizes

	Limit sodas and other beverages with added sugars

	At least once a week, substitute a vegetable-based meat alternative into your fast-food choices

	Between classes, avoid vending machines—keep an apple, banana, dried fruit and nuts, etc. in your backpack.

	<h3>Organic Foods</h3>
	Organic

	Foods and beverages developed, grown, or raised without the use of synthetic pesticides, chemicals, or hormones

	Certified Organic categories:

	“100 percent Organic”
	“Organic”  95%
	“Made with Organic Ingredients”  &gt;70%
	“Some Organic Ingredients” &lt;70%

	Locavore
	A person who primarily eats food grown or produced locally

	<h3>Food Safety</h3>
	Foodborne Illnesses
	(See Skills for Behavior Change—pg 285)

	Signs and symptoms of foodborne illness:

	Avoid Risk at Home

	What are the four core practices recommended to prevent foodborne illness?

	<h3>Food Sensitivities</h3>
	Food Allergy—hypersensitivity

	Symptoms
	Tingling in mouth; swelling of lips, tongue and throat; difficulty breathing; hives; vomiting; abdominal cramps; diarrhea…

	Eight Major Food Allergens
	Milk, eggs, peanuts, wheat, soy, tree nuts (walnuts, 	pecans, pistachios etc.), fish, and shellfish

	Celiac Disease—gluten (wheat, rye and barley)
	(See Health Headlines:  Gluten-Free Diets pg. 286)

	Food Intolerance
	Lactose intolerance

	<h3>Genetically Modified Food Crops</h3>
	Boon or Bane (pg 267)?
</div>
@endsection