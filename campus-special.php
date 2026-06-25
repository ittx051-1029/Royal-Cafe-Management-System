<?php 
// Standard Header Include
include('header.php'); 

/* 
  📊 CENTRALIZED DATA REPOSITORY
  Ultra-Pro Level: Data ko ek hi jagah manage karein taake maintenance asaan ho.
*/


$campuses = [

/* ===================== Ⅰ. PREMIUM COFFEE COLLECTION ===================== */
"premium_coffee" => [
    "label"  => "Premium Coffee Collection",
    "icon"   => "☕",
    "theme"  => "#4E342E",
    "origin" => "Reserve Roasts",
    "items"  => [
        // [Title, Image, Price, Description, Rating, Calories, Badge, Stock, Discount, PrepTime, Tag]
        ["Americano", "americano.png", "300", "Double shot espresso with hot water", "9/10", "10 kcal", "Bestseller", "In Stock", "5%", "3 mins", "Coffee"],
        ["Cappuccino", "cappuccino.png", "360", "Equal parts espresso, steam, and foam", "8/10", "140 kcal", "Classic", "In Stock", "0%", "5 mins", "Coffee"],
        ["Caramel", "caramel.png", "400", "Sweet caramel infused brew", "8.5/10", "210 kcal", "Sweet", "In Stock", "10%", "4 mins", "Flavored"],
        ["Caramel Latte", "caramel-latte.png", "420", "Creamy latte with rich caramel", "9/10", "250 kcal", "Popular", "In Stock", "0%", "5 mins", "Latte"],
        ["Cold Brew", "cold-brew.png", "380", "24-hour steep smooth extraction", "10/10", "5 kcal", "Reserve", "Limited", "0%", "1 min", "Cold"],
        ["Cotton", "cotton.png", "350", "Soft textured airy milk coffee", "8/10", "110 kcal", "New", "In Stock", "0%", "4 mins", "Specialty"],
        ["Dark Chocolate Cake", "dark-chocolate-cake.png", "500", "Coffee-paired intense cocoa cake", "10/10", "450 kcal", "Premium", "In Stock", "15%", "2 mins", "Bakery"],
        ["Flat White", "flat-white.png", "350", "Thin layer of velvet microfoam", "9/10", "120 kcal", "Barista Choice", "In Stock", "0%", "4 mins", "Coffee"],
        ["Fog", "fog.png", "370", "Earl Grey tea latte with vanilla", "8/10", "150 kcal", "Trending", "In Stock", "0%", "5 mins", "Tea-Latte"],
        ["Latte", "latte.png", "380", "Smooth espresso with steamed milk", "9/10", "180 kcal", "Classic", "In Stock", "0%", "4 mins", "Coffee"],
        ["Midnight", "midnight.png", "400", "Extra dark roast for night owls", "10/10", "15 kcal", "Bestseller", "In Stock", "20%", "3 mins", "Strong"],
        ["Mill", "mill.png", "340", "Stone ground traditional style", "8/10", "120 kcal", "Authentic", "Limited", "0%", "6 mins", "Traditional"],
        ["Mocha", "mocha.png", "420", "Espresso with dark chocolate and milk", "10/10", "290 kcal", "Popular", "In Stock", "5%", "5 mins", "Coffee"],
        ["Silk Signature", "silk-signature.png", "450", "Ultra-smooth luxury house blend", "10/10", "200 kcal", "Bestseller", "In Stock", "0%", "5 mins", "Signature"],
        ["Strong Brew", "strong-brew.png", "320", "High caffeine concentrated roast", "9/10", "12 kcal", "Energy", "In Stock", "0%", "3 mins", "Coffee"],
        ["Textile Cappuccino", "textile-cappuccino.png", "390", "Complex foam patterns and rich body", "8/10", "170 kcal", "Signature", "In Stock", "0%", "6 mins", "Artisan"],
    ]
],

/* ===================== Ⅱ. COMSATS SPECIAL ===================== */
"comsats_special" => [
    "label"  => "Comsats Special",
    "icon"   => "🏛️",
    "theme"  => "#004b87",
    "origin" => "Campus Exclusives",
    "items"  => [
        ["Comsats Coffee", "comsats-coffee.png", "410", "Tech-inspired energetic blend", "10/10", "200 kcal", "Iconic", "In Stock", "10%", "4 mins", "Campus"],
        ["Clock Tower", "clock-tower.png", "450", "Historic landmark signature blend", "9/10", "220 kcal", "Bestseller", "In Stock", "0%", "5 mins", "Premium"],
    ]
],

/* ===================== Ⅲ. GCUF SPECIAL ===================== */
"gcuf_special" => [
    "label"  => "GCUF Special",
    "icon"   => "🎓",
    "theme"  => "#800000",
    "origin" => "University Tradition",
    "items"  => [
        ["GCUF Coffee", "gcuf-coffee.png", "400", "Deep heritage roasted beans", "10/10", "190 kcal", "Heritage", "In Stock", "10%", "4 mins", "Campus"],
        ["Golden Faisal", "golden-faisal.png", "480", "Premium saffron infused specialty", "10/10", "230 kcal", "Bestseller", "Limited", "0%", "7 mins", "Luxury"],
        ["Layllpur Latte", "layllpur-latte.png", "430", "Local spices mixed with velvet milk", "9/10", "210 kcal", "Local Favorite", "In Stock", "5%", "5 mins", "Latte"],
    ]
],

/* ===================== Ⅳ. LIQUID WELLNESS ===================== */
"liquid_wellness" => [
    "label"  => "Liquid Wellness",
    "icon"   => "💧",
    "theme"  => "#2E7D32",
    "origin" => "Fresh & Healthy",
    "items"  => [
        ["Aam Panna", "aam-panna.png", "200", "Traditional raw mango summer cooler", "9/10", "120 kcal", "Seasonal", "In Stock", "0%", "3 mins", "Fresh"],
        ["Aloevera Juice", "aloevera-juice.png", "220", "Pure aloe pulp health tonic", "9/10", "70 kcal", "Healthy", "In Stock", "0%", "2 mins", "Detox"],
        ["Apple Juice", "apple-juice.png", "180", "Cold pressed red apples", "8/10", "95 kcal", "Bestseller", "In Stock", "0%", "2 mins", "Fruit"],
        ["Arabic Qahwa", "arabic-qahwa.png", "250", "Cardamom infused traditional tea", "9/10", "10 kcal", "Traditional", "In Stock", "15%", "6 mins", "Tea"],
        ["Arnold Palmer", "arnold-palmer.png", "220", "Classic half-tea half-lemonade", "8/10", "110 kcal", "Classic", "In Stock", "0%", "2 mins", "Mocktail"],
        ["Avocada Shake", "avocada-shake.png", "450", "Creamy avocado energy boost", "9/10", "320 kcal", "Bestseller", "In Stock", "0%", "5 mins", "Shake"],
        ["Baobab Juice", "baobab-juice.png", "280", "African superfood vitamin juice", "8/10", "140 kcal", "Exotic", "Out of Stock", "0%", "4 mins", "Superfood"],
        ["Beetroot", "beetroot.png", "200", "Red detox iron booster", "9/10", "85 kcal", "Healthy", "In Stock", "10%", "3 mins", "Detox"],
        ["Blue Berry Smoothie", "blue-berry-smoothie.png", "400", "Antioxidant rich wild berries", "9/10", "240 kcal", "New", "In Stock", "0%", "5 mins", "Smoothie"],
        ["Carrot Orange Juice", "carrot-orange-juice.png", "210", "Immunity boosting citrus mix", "10/10", "100 kcal", "Bestseller", "In Stock", "5%", "3 mins", "Fresh"],
        ["Chaas", "chaas.png", "120", "Spiced traditional buttermilk", "9/10", "60 kcal", "Digestive", "In Stock", "0%", "2 mins", "Dairy"],
        ["Coconut Water", "coconut-water.png", "250", "Pure natural electrolyte water", "10/10", "45 kcal", "Natural", "In Stock", "0%", "1 min", "Fresh"],
        ["Cucumber Mint", "cucumber-mint.png", "190", "Refreshing garden cooler", "8/10", "40 kcal", "Cooling", "In Stock", "0%", "3 mins", "Detox"],
        ["Dragon Fruit", "dragon-fruit.png", "420", "Vibrant pink exotic refresher", "9/10", "130 kcal", "Premium", "Limited", "0%", "5 mins", "Exotic"],
        ["Granita Slush", "granita-slush.png", "350", "Shaved ice with fruit syrup", "9/10", "180 kcal", "Bestseller", "In Stock", "0%", "4 mins", "Frozen"],
        ["Grape Fruit Juice", "grape-fruit-juice.png", "230", "Tangy fat-burning citrus", "8/10", "90 kcal", "Diet", "In Stock", "0%", "3 mins", "Fruit"],
        ["Grape Juice", "grape-juice.png", "200", "Freshly pressed black grapes", "8/10", "120 kcal", "Classic", "In Stock", "0%", "3 mins", "Fruit"],
        ["Green Juice", "green-juice.png", "240", "Spinach, apple and kale mix", "9/10", "95 kcal", "Healthy", "In Stock", "5%", "4 mins", "Detox"],
        ["Hibiscus Tea", "hibuscus-tea.png", "220", "Ruby red floral infusion", "8/10", "60 kcal", "Floral", "In Stock", "0%", "4 mins", "Tea"],
        ["Horchata", "horchata.png", "300", "Cinnamon rice milk refreshment", "9/10", "200 kcal", "Mexican", "In Stock", "0%", "5 mins", "Specialty"],
        ["Iced Teas", "iced-teas.png", "250", "Selection of fruit infused teas", "7/10", "90 kcal", "Variety", "In Stock", "0%", "2 mins", "Tea"],
        ["Jallab", "jallab.png", "280", "Date and grape syrup drink", "8/10", "160 kcal", "Traditional", "In Stock", "0%", "3 mins", "Middle-Eastern"],
        ["Kiwi Cooler", "kiwi-cooler.png", "320", "Zesty kiwi and lime mix", "8/10", "140 kcal", "Refreshing", "In Stock", "0%", "4 mins", "Fresh"],
        ["Lemon Ginger Detox", "lemon-ginger-detox.png", "190", "Warm or cold immunity cleanse", "9/10", "45 kcal", "Bestseller", "In Stock", "10%", "3 mins", "Detox"],
        ["Lemon Iced Tea", "lemon-iced-tea.png", "200", "Tangy lemon tea over ice", "9/10", "80 kcal", "Classic", "In Stock", "0%", "2 mins", "Tea"],
        ["Mango Juice", "mango-juice.png", "180", "Freshly pulped Sindhri mangoes", "10/10", "130 kcal", "Bestseller", "In Stock", "0%", "3 mins", "Fruit"],
        ["Mango Lassi", "mango-lassi.png", "250", "Yogurt and mango creamy blend", "10/10", "250 kcal", "Popular", "In Stock", "0%", "4 mins", "Dairy"],
        ["Masala Chai", "masala-chai.png", "150", "Milk tea with secret spices", "9/10", "120 kcal", "Classic", "In Stock", "0%", "6 mins", "Tea"],
        ["Matcha Latte", "match-latte.png", "350", "Japanese ceremonial green tea", "9/10", "140 kcal", "Bestseller", "In Stock", "10%", "5 mins", "Wellness"],
        ["Mint Margretta", "mint-margretta.png", "300", "Frozen lime and mint delight", "9/10", "150 kcal", "Popular", "In Stock", "0%", "4 mins", "Frozen"],
        ["Orange Juice", "orange-juice.png", "180", "100% natural orange squeeze", "8/10", "90 kcal", "Fresh", "In Stock", "0%", "2 mins", "Fruit"],
        ["Passion Fruit", "passion-fruit.png", "380", "Tangy tropical seed infusion", "9/10", "140 kcal", "Exotic", "In Stock", "0%", "4 mins", "Fresh"],
        ["Pine Apple Juice", "pine-apple-juice.png", "200", "Golden tropical juice", "9/10", "110 kcal", "Fresh", "In Stock", "0%", "3 mins", "Fruit"],
        ["Pomegranate Juice", "pomegranate-juice.png", "260", "Freshly deseeded red juice", "10/10", "140 kcal", "Bestseller", "In Stock", "5%", "4 mins", "Fruit"],
        ["Protein Shake", "protein-shake.png", "500", "Post-workout whey protein", "10/10", "300 kcal", "Gym-Fuel", "In Stock", "0%", "3 mins", "Wellness"],
        ["Sattu", "sattu.png", "150", "Roasted gram energy drink", "7/10", "210 kcal", "Traditional", "In Stock", "0%", "3 mins", "Wellness"],
        ["Soursoce", "soursoce.png", "350", "Rare soursop fruit extract", "8/10", "130 kcal", "Rare", "Limited", "0%", "5 mins", "Exotic"],
        ["Sugarcane Juice", "sugarcane-juice.png", "150", "Cold pressed natural sugar", "9/10", "180 kcal", "Bestseller", "In Stock", "0%", "2 mins", "Fresh"],
        ["Swicy", "swicy.png", "280", "Sweet and spicy blend", "8/10", "120 kcal", "Trending", "In Stock", "0%", "4 mins", "Specialty"],
        ["Tamarind Juice", "tamarind-juice.png", "170", "Tangy imli refresher", "8/10", "110 kcal", "Classic", "In Stock", "0%", "3 mins", "Fresh"],
        ["Watermelon Juice", "watermelon-juice.png", "180", "Summer hydration juice", "8/10", "90 kcal", "Popular", "In Stock", "0%", "2 mins", "Fruit"],
    ]
],

/* ===================== Ⅴ. BAKERY & BISTRO ===================== */
"bakery_bistro" => [
    "label"  => "Bakery & Bistro",
    "icon"   => "🥐",
    "theme"  => "#D2691E",
    "origin" => "Freshly Oven Baked",
    "items"  => [
        ["Alfreedo Pasta", "alfreedo-pasta.png", "650", "Fettuccine in white cream sauce", "10/10", "600 kcal", "Bestseller", "In Stock", "0%", "15 mins", "Pasta"],
        ["Baked Goods", "baked-goods.png", "300", "Assorted daily oven treats", "8/10", "250 kcal", "Variety", "In Stock", "10%", "2 mins", "Bakery"],
        ["Boiled Eggs", "boiled-eggs.png", "150", "Two farm fresh hard boiled eggs", "8/10", "160 kcal", "Healthy", "In Stock", "0%", "8 mins", "Breakfast"],
        ["Cake", "cake.png", "500", "Whole artisan sponge cake", "9/10", "1200 kcal", "Family Size", "Limited", "0%", "5 mins", "Bakery"],
        ["Cake Slice", "cake-slice.png", "250", "Moist velvet cake portion", "9/10", "350 kcal", "Bestseller", "In Stock", "0%", "2 mins", "Dessert"],
        ["Chesse Muffins", "chesse-muffins.png", "220", "Savory cheddar filled muffins", "8/10", "280 kcal", "Savory", "In Stock", "0%", "5 mins", "Bakery"],
        ["Chocolate Croissant", "chocolate-croissant.png", "280", "Flaky pastry with dark chocolate", "10/10", "340 kcal", "Popular", "In Stock", "15%", "3 mins", "Pastry"],
        ["Classic Plain Croissant", "classic_plain_croissant.png", "220", "Butter rich flaky layers", "9/10", "250 kcal", "Authentic", "In Stock", "0%", "2 mins", "Pastry"],
        ["Croissants", "croissants.png", "220", "Daily selection of croissants", "9/10", "250 kcal", "Classic", "In Stock", "0%", "2 mins", "Pastry"],
        ["Donut", "donut.png", "180", "Glazed chocolate or sugar donut", "9/10", "300 kcal", "Popular", "In Stock", "0%", "1 min", "Bakery"],
        ["Egg Croissant", "egg-croissant.png", "350", "Croissant sandwich with eggs", "9/10", "410 kcal", "Breakfast", "In Stock", "0%", "8 mins", "Savory"],
        ["Fruit Tart", "fruit-tart.png", "300", "Shortcrust pastry with custard", "10/10", "300 kcal", "Bestseller", "In Stock", "0%", "2 mins", "Bakery"],
        ["Lasanga Pasta", "lasanga-pasta.png", "700", "Layered meat and cheese pasta", "10/10", "700 kcal", "Chef Special", "In Stock", "0%", "20 mins", "Pasta"],
        ["Mac Cheese Pasta", "mac-cheese-pasta.png", "550", "Ultra cheesy macaroni", "9/10", "580 kcal", "Comfort", "In Stock", "5%", "12 mins", "Pasta"],
        ["Mushroom Danish", "mushroom-danish.png", "250", "Savory pastry with wild mushrooms", "8/10", "240 kcal", "Savory", "In Stock", "0%", "5 mins", "Bakery"],
        ["Pancakes", "pancakes.png", "350", "Stack of 3 fluffy pancakes", "9/10", "400 kcal", "Bestseller", "In Stock", "0%", "12 mins", "Brunch"],
        ["Pasta", "pasta.png", "500", "House special red sauce pasta", "8/10", "450 kcal", "Classic", "In Stock", "10%", "15 mins", "Pasta"],
        ["Pasta Arrabiata", "pasta-arrabiata.png", "580", "Spicy tomato and garlic pasta", "9/10", "480 kcal", "Popular", "In Stock", "0%", "14 mins", "Pasta"],
        ["Plain Croissant", "plain-croissant.png", "200", "Standard butter pastry", "8/10", "240 kcal", "Value", "In Stock", "0%", "2 mins", "Pastry"],
        ["Spaghetti Bolognese", "spaghetti-bolognese-pasta.png", "620", "Classic Italian meat spaghetti", "10/10", "620 kcal", "Classic", "In Stock", "0%", "15 mins", "Pasta"],
        ["Waffles", "waffles.png", "360", "Crispy waffles with syrup", "10/10", "420 kcal", "Bestseller", "In Stock", "0%", "12 mins", "Brunch"],
    ]
],

/* ===================== Ⅵ. GLOBAL GASTRONOMY ===================== */
"global_gastronomy" => [
    "label"  => "Global Gastronomy",
    "icon"   => "🍝",
    "theme"  => "#8E44AD",
    "origin" => "International Cuisines",
    "items"  => [
        ["Chenab", "chenab.png", "450", "Regional fusion specialty", "9/10", "380 kcal", "Local Mix", "In Stock", "0%", "10 mins", "Fusion"],
        ["Creepes", "creepes.png", "340", "French thin pancakes", "9/10", "300 kcal", "Delicate", "In Stock", "0%", "8 mins", "French"],
        ["Dumplings", "dumplings.png", "450", "Steamed chicken dumplings (6pc)", "9/10", "400 kcal", "Popular", "In Stock", "0%", "15 mins", "Asian"],
        ["Edamame Beans", "edamame-beans.png", "300", "Salted soy beans in pods", "8/10", "120 kcal", "Healthy", "In Stock", "0%", "5 mins", "Asian"],
        ["Empandas", "empandas.png", "480", "Stuffed Latin savory pastries", "9/10", "420 kcal", "New", "In Stock", "10%", "12 mins", "Latin"],
        ["Falafel", "falafel.png", "400", "Deep fried chickpea balls", "8/10", "350 kcal", "Vegan", "In Stock", "0%", "10 mins", "Arabic"],
        ["Fries", "fries.png", "250", "Golden crispy potato fries", "10/10", "400 kcal", "Classic", "In Stock", "0%", "8 mins", "Sides"],
        ["Fried Chicken", "fried-chicken.png", "350", "Crunchy deep fried pieces", "10/10", "600 kcal", "Bestseller", "In Stock", "15%", "15 mins", "Chicken"],
        ["Gourmet Wraps", "gourmet-wraps.png", "450", "Chef's special filled tortillas", "9/10", "430 kcal", "Premium", "In Stock", "0%", "10 mins", "Wrap"],
        ["Loaded Fries", "loaded-fries.png", "250", "Fries with cheese and jalapenos", "10/10", "400 kcal", "Bestseller", "In Stock", "0%", "10 mins", "Sides"],
        ["Noodles", "noodles.png", "500", "Stir fried egg noodles", "9/10", "450 kcal", "Quick", "In Stock", "0%", "12 mins", "Asian"],
        ["Ramen", "ramen.png", "600", "Authentic Japanese noodle soup", "9/10", "550 kcal", "Premium", "In Stock", "0%", "18 mins", "Asian"],
        ["Rolls", "rolls.png", "200", "Savory stuffed snack rolls", "8/10", "300 kcal", "Value", "In Stock", "0%", "8 mins", "Snack"],
        ["Sushi Rolls", "sushi-rolls.png", "750", "Premium salmon and rice rolls", "9/10", "500 kcal", "Chef Choice", "Limited", "0%", "20 mins", "Japanese"],
        ["Vege Dip", "vege-dip.png", "280", "Vegetable sticks with hummus", "9/10", "150 kcal", "Healthy", "In Stock", "0%", "5 mins", "Sides"],
    ]
],

/* ===================== Ⅶ. GRAB & GO ===================== */
"grab_go" => [
    "label"  => "Grab & Go",
    "icon"   => "🍟",
    "theme"  => "#27AE60",
    "origin" => "Fast & Fresh",
    "items"  => [
        ["Barebell", "barebell.png", "350", "Premium protein bar", "9/10", "200 kcal", "Gym Pack", "In Stock", "0%", "1 min", "Fitness"],
        ["Burger", "burger.png", "450", "Classic beef patty burger", "9/10", "550 kcal", "Classic", "In Stock", "0%", "12 mins", "Burger"],
        ["Chapli Kabab Burger", "chapli-kabab-burger.png", "480", "Local spice patty burger", "9/10", "580 kcal", "Popular", "In Stock", "0%", "15 mins", "Burger"],
        ["Chicken Wraps", "chicken-wraps.png", "350", "Grilled chicken in tortilla", "9/10", "420 kcal", "Bestseller", "In Stock", "10%", "10 mins", "Wrap"],
        ["Choco Chip Granola", "chocolate-chip-granola.png", "180", "Energy bar with choco chips", "9/10", "220 kcal", "Healthy", "In Stock", "0%", "1 min", "Snack"],
        ["Chomps", "chomps.png", "120", "Mini savory meat snacks", "8/10", "100 kcal", "Mini", "In Stock", "0%", "1 min", "Snack"],
        ["Cut Fruits", "cut-fruits.png", "200", "Box of seasonal sliced fruits", "9/10", "90 kcal", "Fresh", "In Stock", "0%", "1 min", "Healthy"],
        ["Dust Gold", "dust-gold.png", "150", "Golden roasted snack mix", "8/10", "120 kcal", "New", "Limited", "0%", "1 min", "Snack"],
        ["Granola Bar", "granola-bar.png", "180", "Handmade oat and honey bar", "9/10", "220 kcal", "Organic", "In Stock", "0%", "1 min", "Snack"],
        ["Hot Dog", "hot-dog.png", "300", "Steamed sausage in bun", "8/10", "400 kcal", "Classic", "In Stock", "5%", "6 mins", "Burger"],
        ["Nutrilov Granola Bar", "nutrilov-granola-bar.png", "200", "Nutrient dense energy bar", "9/10", "230 kcal", "Premium", "In Stock", "0%", "1 min", "Snack"],
        ["Nuts", "nuts.png", "150", "Mixed salted nuts pack", "8/10", "200 kcal", "Healthy", "In Stock", "0%", "1 min", "Snack"],
        ["Panini", "panini.png", "400", "Grilled Italian sandwich", "10/10", "480 kcal", "Bestseller", "In Stock", "0%", "10 mins", "Sandwich"],
        ["Popcorn Chicken", "popcorn-chicken.png", "300", "Crispy chicken bite sizes", "9/10", "450 kcal", "Popular", "In Stock", "0%", "8 mins", "Chicken"],
        ["Protien Chips", "protien-chips.png", "250", "High protein baked chips", "8/10", "140 kcal", "Fitness", "In Stock", "0%", "1 min", "Snack"],
        ["Sandwich", "sandwich.png", "380", "Layered cold club sandwich", "9/10", "450 kcal", "Classic", "In Stock", "0%", "5 mins", "Sandwich"],
        ["Spicy Popcorn", "spicy-popcorn.png", "150", "Chili lime popcorn bucket", "9/10", "200 kcal", "Trending", "In Stock", "0%", "3 mins", "Snack"],
        ["Toffee Popcorn", "toffee-popcorn.png", "180", "Caramel glazed popcorn", "9/10", "250 kcal", "Popular", "In Stock", "0%", "3 mins", "Snack"],
        ["Wrap", "wrap.png", "350", "Standard vegetable wrap", "8/10", "390 kcal", "Value", "In Stock", "0%", "8 mins", "Wrap"],
        ["Zinger Burger", "zinger-burger.png", "500", "Spicy breaded chicken burger", "10/10", "650 kcal", "Bestseller", "In Stock", "20%", "15 mins", "Burger"],
    ]
],

/* ===================== Ⅷ. DESSERT ATELIER ===================== */
"dessert_atelier" => [
    "label"  => "Dessert Atelier",
    "icon"   => "🍰",
    "theme"  => "#E67E22",
    "origin" => "Sweet Masterpieces",
    "items"  => [
        ["Brownie", "brownie.png", "300", "Dark chocolate walnut brownie", "9/10", "400 kcal", "Classic", "In Stock", "0%", "2 mins", "Bakery"],
        ["Brownie Milkshake", "brownie-milkshake.png", "450", "Thick shake with brownie chunks", "10/10", "550 kcal", "Bestseller", "In Stock", "0%", "6 mins", "Shake"],
        ["Bubble Tea", "bubble-tea.png", "400", "Milk tea with tapioca pearls", "10/10", "220 kcal", "Popular", "In Stock", "10%", "5 mins", "Specialty"],
        ["Cheese Cake", "cheese-cake.png", "520", "New York baked cheesecake", "10/10", "650 kcal", "Premium", "In Stock", "0%", "2 mins", "Bakery"],
        ["Chocolate Cake", "chocolate-cake.png", "500", "Rich dark chocolate ganache", "10/10", "700 kcal", "Classic", "In Stock", "0%", "2 mins", "Bakery"],
        ["Chocolate Delight", "chocolate-delight.png", "420", "Mousse and biscuit dessert", "9/10", "410 kcal", "Bestseller", "In Stock", "0%", "3 mins", "Dessert"],
        ["Churros", "churros.png", "350", "Fried dough with cinnamon sugar", "9/10", "450 kcal", "New", "In Stock", "0%", "10 mins", "Spanish"],
        ["Fudge Cake", "fudge-cake.png", "480", "Gooey chocolate fudge layers", "9/10", "520 kcal", "Popular", "In Stock", "0%", "2 mins", "Bakery"],
        ["Ice Cream Soda", "ice-cream-soda.png", "350", "Vanilla float in fizzy soda", "8/10", "300 kcal", "Retro", "In Stock", "0%", "4 mins", "Cold"],
        ["Kitkat Shake", "kitkat-shake.png", "460", "Blended Kitkat chocolate shake", "10/10", "420 kcal", "Bestseller", "In Stock", "5%", "6 mins", "Shake"],
        ["Lava Cake", "lava.png", "550", "Molten center chocolate cake", "10/10", "720 kcal", "Must Try", "In Stock", "0%", "15 mins", "Bakery"],
        ["Mango Ice Slush", "mango-ice-slush.png", "360", "Frozen mango dessert drink", "10/10", "200 kcal", "Seasonal", "In Stock", "0%", "4 mins", "Frozen"],
        ["Milkshake", "milkshake.png", "380", "Standard vanilla thick shake", "9/10", "250 kcal", "Classic", "In Stock", "0%", "5 mins", "Shake"],
        ["Oreo Shake", "oreo-shake.png", "440", "Cookies and cream milkshake", "10/10", "410 kcal", "Bestseller", "In Stock", "0%", "6 mins", "Shake"],
        ["Rich Chocolate Delight", "rich-chocolate-delight.png", "450", "Premium cocoa bean mousse", "10/10", "460 kcal", "Premium", "In Stock", "0%", "4 mins", "Dessert"],
        ["Slushie", "slushie.png", "250", "Flavored ice cold slush", "9/10", "180 kcal", "Cool", "In Stock", "0%", "3 mins", "Frozen"],
        ["Slush Puppie", "slush-puppie.png", "340", "Original blue raspberry slush", "8/10", "170 kcal", "Classic", "In Stock", "0%", "3 mins", "Frozen"],
        ["Special PK", "special-pk.png", "400", "House secret sweet treat", "9/10", "320 kcal", "Unique", "Limited", "0%", "5 mins", "Specialty"],
        ["Tiramisu", "tiramisu.png", "600", "Authentic Italian coffee dessert", "10/10", "680 kcal", "Bestseller", "In Stock", "0%", "2 mins", "Bakery"],
        ["Tiramisu Coffee", "tiramisu-coffee.png", "460", "Espresso mixed with mascarpone", "10/10", "300 kcal", "Popular", "In Stock", "10%", "5 mins", "Coffee-Dessert"],
        ["Vanilla Cream Frappe", "vanilla-cream-frappe.png", "420", "Iced vanilla cream blended", "9/10", "380 kcal", "Cool", "In Stock", "0%", "6 mins", "Cold"],
        ["Yogurt Perfaits", "yogurt-perfaits.png", "380", "Honey, yogurt and fruit layers", "9/10", "280 kcal", "Healthy", "In Stock", "0%", "5 mins", "Healthy"],
    ]
]

];
?>


<!-- 🎨 ULTRA-PRO STYLES -->
<style>
    :root {
        --primary-gold: #C5A059;
        --royal-maroon: #4A0E0E;
        --bg-mocha: #1a0f0d; /* Reference image jaisa dark background */
    }

    /* Page Setup */
    body {
        background: var(--bg-mocha);
        color: #FDFBF7;
        font-family: 'Poppins', sans-serif;
    }

    .campus-experience {
        padding: 100px 0;
        background: radial-gradient(circle at top right, #2b1b1a, #1a0f0d);
    }

    /* Typography */
    .ls-3 { letter-spacing: 3px; }
    .text-gold { color: var(--primary-gold); }
    .editorial-title {
        font-family: 'Playfair Display', serif;
        font-size: clamp(2.5rem, 5vw, 4rem);
        color: white;
    }

    /* 🏙️ Professional Custom Tabs */
    .custom-campus-tabs {
        border: none;
        background: rgba(255, 255, 255, 0.05);
        padding: 8px;
        border-radius: 50px;
        display: inline-flex;
        backdrop-filter: blur(10px);
    }

    .custom-campus-tabs .nav-link {
        border: none !important;
        background: transparent !important;
        color: rgba(255, 255, 255, 0.6) !important;
        font-weight: 600;
        padding: 12px 28px;
        border-radius: 40px;
        transition: 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .custom-campus-tabs .nav-link.active {
        background: var(--primary-gold) !important;
        color: #1a0f0d !important;
        box-shadow: 0 10px 20px rgba(197, 160, 89, 0.3) !important;
    }

/* Container Background - Glassmorphism Effect */
.nav-container-pro {
    background: rgba(25, 20, 18, 0.6);
    backdrop-filter: blur(15px);
    border-radius: 100px;
    padding: 15px 30px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    display: inline-block;
    margin: 0 auto;
}

/* Base Pill Style */
.nav-link-pro {
    background: transparent;
    border: none;
    color: rgba(255, 255, 255, 0.7);
    font-weight: 600;
    font-size: 14px;
    padding: 12px 24px;
    border-radius: 50px;
    transition: all 0.4s cubic-bezier(0.23, 1, 0.32, 1);
    display: flex;
    align-items: center;
    gap: 10px;
    position: relative;
    overflow: hidden;
}

/* Hover Effect: Gentle Glow & Rise */
.nav-link-pro:hover {
    color: #fff;
    background: rgba(255, 255, 255, 0.05);
    transform: translateY(-2px);
}

.nav-link-pro:hover .icon-wrap {
    transform: scale(1.2) rotate(-10deg);
}

/* Active State: The Signature Gold Glow */
.nav-link-pro.active {
    background: #c9a050 !important; /* Your specific Gold from image */
    color: #1a1512 !important;
    font-weight: 700;
    box-shadow: 0 10px 25px rgba(201, 160, 80, 0.4), 
                inset 0 -2px 0 rgba(0, 0, 0, 0.1);
}

/* Icon Animation */
.icon-wrap {
    display: inline-block;
    transition: transform 0.3s ease;
    font-size: 16px;
}

/* Label Refinement */
.label-text {
    letter-spacing: 0.5px;
    white-space: nowrap;
}

/* Layout for 2 rows as seen in your image */
.custom-campus-tabs {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    border: none !important;
}

    /* 🧊 Ultra Pro Coffee Card */

    .pro-coffee-card {
    position: relative;
    background: #1a1512;
    border-radius: 24px;
    padding: 12px;
    border: 1px solid rgba(255, 255, 255, 0.05);
    transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.pro-coffee-card:hover {
    transform: translateY(-10px);
    border-color: #c9a050;
    box-shadow: 0 20px 40px rgba(0,0,0,0.4);
}

/* Fix Badge Overlap */
.card-badges {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 10;
    display: flex;
    flex-direction: column;
    gap: 5px;
}

.badge-premium {
    background: linear-gradient(135deg, #c9a050, #8e6d2f);
    color: #fff;
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 700;
    text-transform: uppercase;
}

.badge-discount {
    background: #e74c3c;
    color: white;
    padding: 4px 12px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 700;
}

.image-wrapper {
    position: relative;
    border-radius: 18px;
    overflow: hidden;
    height: 200px;
}

.floating-price {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(181, 41, 31, 0.9);
    color: white;
    padding: 6px 14px;
    border-radius: 12px;
    font-weight: 800;
    font-size: 14px;
}

.top-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 15px 0 5px;
}

.category-tag {
    color: #c9a050;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
}

.stock-status.in { color: #2ecc71; font-size: 12px; }
.stock-status.out { color: #e74c3c; font-size: 12px; }

.item-title {
    color: white;
    font-weight: 700;
    margin-bottom: 5px;
    text-align: center;
}

.item-desc {
    color: rgba(255,255,255,0.5);
    font-size: 13px;
    text-align: center;
    margin-bottom: 20px;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    background: rgba(255, 255, 255, 0.03);
    padding: 15px 5px;
    border-radius: 15px;
    margin-bottom: 20px;
    text-align: center;
}

.info-item label {
    display: block;
    font-size: 10px;
    color: #c9a050;
    text-transform: uppercase;
    margin-bottom: 3px;
}

.info-item strong {
    color: white;
    font-size: 13px;
}

.btn-quick-add {
    width: 100%;
    background: transparent;
    border: 2px solid #b5291f;
    color: #b5291f;
    padding: 12px;
    border-radius: 12px;
    font-weight: 800;
    transition: 0.3s;
}

.btn-quick-add:hover {
    background: #b5291f;
    color: white;
}
    .card-glass-body {
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(197, 160, 89, 0.2);
        border-radius: 24px;
        padding: 20px;
        text-align: center;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        backdrop-filter: blur(10px);
        transition: 0.4s;
    }

    .image-wrap {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 18px;
        padding: 25px;
        margin-bottom: 20px;
        position: relative;
    }

    .coffee-img {
        height: 140px;
        object-fit: contain;
        transition: 0.5s transform cubic-bezier(0.175, 0.885, 0.32, 1.275);
    }

    .price-tag {
        position: absolute;
        top: 10px;
        right: 10px;
        background: var(--campus-color);
        color: white;
        padding: 5px 15px;
        border-radius: 30px;
        font-weight: 800;
        font-size: 0.8rem;
        box-shadow: 0 5px 15px rgba(0,0,0,0.3);
    }

    /* Brew Specs Widget */
    .brew-stats {
        background: rgba(0,0,0,0.2);
        padding: 10px 15px;
        border-radius: 15px;
        border: 1px solid rgba(255,255,255,0.05);
    }

    .x-small { font-size: 0.65rem; font-weight: 700; letter-spacing: 1px; color: var(--primary-gold); }

    /* Button Styling */
    .pro-add-btn {
        background: transparent;
        border: 2px solid var(--campus-color);
        color: var(--campus-color);
        border-radius: 12px;
        padding: 12px;
        font-weight: 800;
        transition: 0.3s;
        width: 100%;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    /* Hover States */
    .pro-coffee-card:hover .card-glass-body {
        transform: translateY(-15px);
        border-color: var(--primary-gold);
        background: rgba(255, 255, 255, 0.06);
    }

    .pro-coffee-card:hover .coffee-img {
        transform: scale(1.15) rotate(5deg);
    }

    .pro-add-btn:hover {
        background: var(--campus-color);
        color: white;
        box-shadow: 0 10px 20px rgba(0,0,0,0.4);
    }

    .badge {
    position: absolute;
    top: 10px;
    left: 10px;
    background: #f39c12; /* Gold color */
    color: white;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: bold;
    text-transform: uppercase;
}

.category-tag {
    color: #e67e22;
    font-size: 11px;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-weight: 700;
}

/* Container for the image */
.image-wrapper {
    position: relative;
    width: 100%;
    height: 220px; /* Fixed height for uniformity */
    border-radius: 20px;
    overflow: hidden;
    background: #25201d; /* Fallback color */
    margin-bottom: 15px;
}

/* THE FIX: Professional Image Display */
.main-coffee-img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* This makes the image fill the area perfectly */
    object-position: center;
    transition: transform 0.5s ease;
}

/* Zoom effect on hover for Pro look */
.pro-coffee-card:hover .main-coffee-img {
    transform: scale(1.1);
}

/* Correct positioning for badges over the image */
.card-badges-overlay {
    position: absolute;
    top: 12px;
    left: 12px;
    z-index: 5;
    display: flex;
    flex-direction: column;
    gap: 6px;
}

.badge-premium {
    background: linear-gradient(135deg, #c9a050, #a17a2d);
    color: white;
    padding: 5px 12px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 800;
    text-transform: uppercase;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.badge-discount {
    background: #b5291f;
    color: white;
    padding: 5px 12px;
    border-radius: 8px;
    font-size: 10px;
    font-weight: 800;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

/* Floating Price repositioned */
.floating-price {
    position: absolute;
    top: 12px;
    right: 12px;
    background: rgba(181, 41, 31, 0.95);
    backdrop-filter: blur(5px);
    color: white;
    padding: 6px 15px;
    border-radius: 12px;
    font-weight: 800;
    font-size: 14px;
    z-index: 5;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

</style>

<!-- 🎓 SECTION: CAMPUS SPECIALS -->
<!-- 🎓 SECTION: CAMPUS SPECIALS -->
<section id="campus" class="campus-experience">
    <div class="container">
        
        <!-- Header Section -->
        <div class="text-center mb-5">
            <h6 class="sub-label text-gold ls-3 fw-bold mb-2">Exclusive Academic Brews</h6>
            <h2 class="editorial-title fw-bold">Campus Specials</h2>
            <div class="mx-auto bg-gold mb-3" style="height: 3px; width: 80px;"></div>
            <p style="color: rgba(255,255,255,0.7); max-width: 650px; margin: 0 auto;" class="lead">
                Exploring the Royal Archives: Artisanal blends designed to fuel the late-night studiers and visionary dreamers.
            </p>
        </div>

        <!-- 🏙️ Dynamic Tab Navigation -->
        <div class="nav-container-pro">
    <ul class="nav nav-pills custom-campus-tabs" id="campusTab" role="tablist">
        <?php $first = true; foreach ($campuses as $id => $data): ?>
        <li class="nav-item">
            <button class="nav-link-pro <?php echo $first ? 'active' : ''; ?>" 
                    id="<?php echo $id; ?>-tab" 
                    data-bs-toggle="pill" 
                    data-bs-target="#<?php echo $id; ?>" 
                    type="button" 
                    role="tab">
                <span class="icon-wrap"><?php echo $data['icon']; ?></span>
                <span class="label-text"><?php echo $data['label']; ?></span>
            </button>
        </li>
        <?php $first = false; endforeach; ?>
    </ul>
</div>

        <!-- ☕ Dynamic Tab Content -->
        <div class="tab-content mt-4" id="campusTabContent">
            <?php $first = true; foreach ($campuses as $id => $data): ?>
            <div class="tab-pane fade <?php echo $first ? 'show active' : ''; ?>" id="<?php echo $id; ?>" role="tabpanel">
                
                <div class="row g-4">
                    <?php foreach ($data['items'] as $item): 
                        // Ultra-Mapping (11 points)
                        $title       = $item[0]; $image    = $item[1]; $price    = $item[2];
                        $description = $item[3]; $rating   = $item[4]; $calories = $item[5];
                        $badge       = $item[6]; $stock    = $item[7]; $discount = $item[8];
                        $prepTime    = $item[9]; $category = $item[10];
                    ?>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="pro-coffee-card">
                            <!-- Overlay Badges -->
                            <div class="card-badges">
                                <span class="badge-premium"><?php echo $badge; ?></span>
                                <?php if($discount !== '0%'): ?>
                                    <span class="badge-discount"><?php echo $discount; ?> OFF</span>
                                <?php endif; ?>
                            </div>

                            <div class="card-inner">
                                <!-- Image Section -->
                                <!-- Updated Image Wrapper inside the loop -->
<div class="image-wrapper">
    <!-- Overlay Badges inside wrapper for better alignment -->
    <div class="card-badges-overlay">
        <span class="badge-premium"><?php echo $badge; ?></span>
        <?php if($discount !== '0%'): ?>
            <span class="badge-discount"><?php echo $discount; ?> OFF</span>
        <?php endif; ?>
    </div>
    
    <!-- Image with optimized display -->
    <img src="images/<?php echo $image; ?>" alt="<?php echo $title; ?>" class="main-coffee-img">
    
    <div class="floating-price">Rs. <?php echo $price; ?></div>
</div>
                                
                                <!-- Content Section -->
                                <div class="content-body">
                                    <div class="top-meta">
                                        <span class="category-tag"><?php echo $category; ?></span>
                                        <span class="stock-status <?php echo (strtolower($stock) == 'in stock') ? 'in' : 'out'; ?>">
                                            <?php echo $stock; ?>
                                        </span>
                                    </div>

                                    <h4 class="item-title"><?php echo $title; ?></h4>
                                    <p class="item-desc"><?php echo $description; ?></p>
                                    
                                    <!-- Advanced Info Grid -->
                                    <div class="info-grid">
                                        <div class="info-item">
                                            <label>Rating</label>
                                            <strong><?php echo $rating; ?></strong>
                                        </div>
                                        <div class="info-item">
                                            <label>Prep</label>
                                            <strong><?php echo $prepTime; ?></strong>
                                        </div>
                                        <div class="info-item">
                                            <label>Energy</label>
                                            <strong><?php echo $calories; ?></strong>
                                        </div>
                                    </div>

                                    <button class="btn-quick-add">
                                        QUICK ADD <i class="fas fa-shopping-cart ms-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php $first = false; endforeach; ?>
        </div>
    </div>
</section>

<?php 
// Standard Footer Include
include('footer.php'); 
?>