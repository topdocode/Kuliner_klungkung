-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2023 at 07:45 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `system_culinery`
--

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` bigint UNSIGNED NOT NULL,
  `locations_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cooked_menu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `locations_id`, `name`, `image`, `cooked_menu`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'I Wayan Suweca', 'chef-images/vuTMRyhHTpnysS8wOz1TRT3c4qwKUSqU3qJoEhiP.jpg', '1,2,3', 'Passionate local food enthusiasts bringing the authentic flavors of Klungkung\'s culinary heritage.', '2023-06-18 05:16:08', '2023-06-18 07:49:39'),
(2, 2, 'Nyoman Ayu Wirastuti', 'chef-images/EG9SCxFp0hpAoeJGZN6Vm4fsalrTroPnleQ1oWIv.jpg', '2,3,4', 'Dedicated food artisans preserving the rich gastronomic traditions of Klungkung through their delectable creations.', '2023-06-18 05:16:08', '2023-06-18 07:49:44'),
(3, 3, 'I Wayan Suparta', 'chef-images/85yGtkz4g1tf3uXnbUCm9wGccj3FqYC3wtmlfMkU.jpg', '1,2,4', 'Dedicated culinary artisan showcasing the authentic flavors of Klungkung through their exquisite dishes.', '2023-06-18 05:16:08', '2023-06-18 07:49:50'),
(4, 4, 'Ni Made Sariati', 'chef-images/vlKRObnTHKwqEW0r3QQuqMfM7wIKBxGh8BMaOduL.jpg', '1,3,4', 'Passionate food entrepreneur bringing the rich culinary heritage of Klungkung to life with their mouthwatering creations.', '2023-06-18 05:16:08', '2023-06-18 07:49:59');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'TastyTaster99', 'tastytaster99@example.com', 'The food at Delicious Klungkung is absolutely amazing! From the rich flavors to the beautiful presentation, every bite is a culinary delight. Highly recommended!', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(2, 'FoodLover21', 'foodlover21@example.com', 'I can\'t get enough of the delicious food at Delicious Klungkung! Every dish is a burst of flavors that truly captures the essence of Klungkung\'s culinary heritage. Keep up the great work!', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(3, 'TasteExplorer', 'tasteexplorer@email.com', 'I had the pleasure of dining at Delicious Klungkung and it was an unforgettable experience. The attention to detail in each dish and the impeccable service made it a memorable culinary journey. Highly recommended for food enthusiasts!', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(4, 'CulinaryAdventurer', 'culinaryadventurer@example.com', 'Delicious Klungkung is a hidden gem for food lovers! The variety of flavors and textures in their dishes is truly remarkable. It\'s a must-visit destination for anyone seeking an authentic and delightful culinary experience in Klungkung.', '2023-06-18 05:16:08', '2023-06-18 05:16:08');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint UNSIGNED NOT NULL,
  `menus_id` bigint UNSIGNED NOT NULL,
  `title_1` text COLLATE utf8mb4_unicode_ci,
  `title_2` text COLLATE utf8mb4_unicode_ci,
  `title_3` text COLLATE utf8mb4_unicode_ci,
  `title_4` text COLLATE utf8mb4_unicode_ci,
  `title_5` text COLLATE utf8mb4_unicode_ci,
  `title_6` text COLLATE utf8mb4_unicode_ci,
  `step_1` text COLLATE utf8mb4_unicode_ci,
  `step_2` text COLLATE utf8mb4_unicode_ci,
  `step_3` text COLLATE utf8mb4_unicode_ci,
  `step_4` text COLLATE utf8mb4_unicode_ci,
  `step_5` text COLLATE utf8mb4_unicode_ci,
  `step_6` text COLLATE utf8mb4_unicode_ci,
  `history` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `menus_id`, `title_1`, `title_2`, `title_3`, `title_4`, `title_5`, `title_6`, `step_1`, `step_2`, `step_3`, `step_4`, `step_5`, `step_6`, `history`, `created_at`, `updated_at`) VALUES
(1, 1, 'Prepare the ingredients', 'Cook the chicken', 'Cook the rice', 'Prepare the side dishes', 'Assemble the dish', 'Serve and enjoy', 'Gather the following ingredients: fresh chicken pieces, fragrant rice, lemongrass, galangal, turmeric, sambal matah, crispy fried shallots, and pickled vegetables.', 'In a pot, boil the chicken pieces with water, lemongrass, galangal, and turmeric until the chicken is tender and fully cooked. Remove the chicken from the pot and set it aside.', 'Wash the fragrant rice thoroughly and drain the water. In a separate pot, sauté some sliced shallots, minced garlic, and grated ginger until fragrant. Add the washed rice to the pot and stir-fry it for a few minutes. Pour in the chicken broth or water and bring it to a boil. Reduce the heat, cover the pot, and let the rice simmer until it is cooked and fluffy.', 'While the rice is cooking, prepare the side dishes. Make the sambal matah by mixing finely chopped shallots, chili peppers, lemongrass, and lime juice. Fry shallots until crispy to make the garnish. Slice and pickle some vegetables like cucumber and carrots for a refreshing accompaniment.', 'To serve, place a generous portion of fragrant rice in a bowl. Arrange the cooked chicken pieces on top of the rice. Garnish with a spoonful of sambal matah and sprinkle crispy fried shallots over the chicken. Serve with a side of pickled vegetables.', 'Present your homemade Klungkung Chicken Rice to your family or guests. The fragrant rice, tender chicken, and flavorful condiments create a harmonious and satisfying meal. Enjoy the unique taste of Klungkung\'s culinary heritage and savor every delicious bite.', 'Klungkung Chicken Rice, also known as Nasi Ayam Klungkung, is a traditional Balinese dish that originated in the Klungkung regency of Bali, Indonesia. This culinary masterpiece has a rich history deeply rooted in the island\'s cultural heritage. The history of Klungkung Chicken Rice dates back many generations and has been passed down through Balinese families for centuries. It is believed to have been created by the skilled culinary artisans of Klungkung, who carefully crafted this dish to showcase the distinct flavors and culinary traditions of the region. Klungkung Chicken Rice is characterized by its fragrant rice cooked in a variety of aromatic herbs and spices. The chicken is prepared using traditional cooking techniques, resulting in tender and flavorful meat. The dish is typically served with an array of condiments such as sambal matah, crispy fried shallots, and pickled vegetables, adding layers of taste and texture to the overall experience. Over the years, Klungkung Chicken Rice has become an iconic dish in Bali, beloved by locals and tourists alike. It represents the essence of Balinese cuisine, combining the freshness of locally sourced ingredients with the mastery of traditional cooking methods.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(2, 2, 'Prepare the ingredients', 'Prepare the spice paste', 'Marinate the duck123', 'Wrap the duck', 'Slow-cook the duck', NULL, 'Start by gathering the necessary ingredients for Klungkung Betutu Duck. You will need a whole duck, aromatic spices like turmeric, ginger, shallots, garlic, and chili peppers, as well as a variety of herbs and seasonings such as lemongrass, kaffir lime leaves, and galangal.', 'In a blender or mortar and pestle, combine the aromatic spices, herbs, and seasonings to create a fragrant spice paste. Blend or grind until you achieve a smooth consistency.', 'Rub the spice paste thoroughly over the duck, making sure to coat it evenly. Allow the duck to marinate for at least 2 hours or preferably overnight in the refrigerator. This will allow the flavors to penetrate the meat.', 'Take a large banana leaf or aluminum foil and wrap the marinated duck tightly, ensuring that it is fully sealed. This helps to lock in the flavors and moisture during the cooking process.', 'Place the wrapped duck in a preheated oven or a traditional underground pit (commonly used in Balinese cooking). Slow-cook the duck at a low temperature, around 150-160°C (300-325°F), for several hours. The slow cooking allows the flavors to develop and the meat to become tender and succulent.', NULL, 'Klungkung Betutu Duck is a traditional Balinese dish with a rich history. It is believed to have originated in Klungkung, a regency in Bali, Indonesia. The dish dates back centuries and is considered a culinary treasure of the region. Betutu refers to the cooking method of slow-cooking the duck with a rich blend of aromatic spices and herbs. The dish was traditionally prepared for special occasions and religious ceremonies, symbolizing a sense of togetherness and celebration. The cooking process involves marinating the duck in a spice paste made from turmeric, ginger, shallots, garlic, chili peppers, and other fragrant ingredients. The marinated duck is then wrapped in banana leaves or foil and slow-cooked over a low flame or in an underground pit for several hours. This slow cooking method allows the flavors to infuse the meat, resulting in tender and succulent duck with a rich and aromatic taste. Klungkung Betutu Duck has gained popularity not only among the locals but also among tourists seeking an authentic taste of Balinese cuisine. It is often served with steamed rice, sambal matah (a traditional Balinese chili condiment), lawar (Balinese vegetable salad), and other side dishes, creating a flavorful and satisfying meal.', '2023-06-18 05:16:08', '2023-06-18 05:49:12'),
(3, 3, 'Prepare the marinade', 'Marinate the meat', 'Skewer the meat', 'Grill the satay', 'Prepare the peanut sauce', 'Serve and enjoy', 'In a mixing bowl, combine soy sauce, kecap manis (sweet soy sauce), garlic, ginger, lemongrass, turmeric, and other desired spices and seasonings. Mix well to create a flavorful marinade.', 'Cut your choice of meat, such as chicken or beef, into small, bite-sized pieces. Place the meat in the marinade and make sure each piece is coated evenly. Allow the meat to marinate for at least 1-2 hours, or preferably overnight, in the refrigerator to enhance the flavors.', 'Thread the marinated meat onto skewers, ensuring that the pieces are close together but not tightly packed. This will allow for even cooking and better absorption of the marinade.', 'Preheat a grill or grill pan to medium-high heat. Place the skewers on the grill and cook for about 3-4 minutes per side, or until the meat is cooked through and nicely charred. Baste the satay with the remaining marinade during the grilling process for added flavor.', 'While the satay is grilling, prepare the peanut sauce. In a saucepan, heat vegetable oil and sauté garlic and shallots until fragrant. Add peanut butter, coconut milk, soy sauce, palm sugar, and a splash of lime juice. Stir well and simmer over low heat until the sauce thickens slightly. Adjust the seasonings to taste.', 'Once the satay is cooked, remove it from the grill and arrange it on a serving platter. Serve the Klungkung Satay with the prepared peanut sauce, along with steamed rice, sliced cucumbers, and onions. Garnish with chopped peanuts and fresh cilantro for added crunch and freshness.', 'Klungkung Satay is a traditional dish originating from Klungkung, Bali. It is believed to have been influenced by Indonesian and Balinese culinary traditions. The history of Klungkung Satay dates back many years, and it has become a popular street food and a staple dish in local celebrations and ceremonies. The satay is typically made by marinating bite-sized pieces of meat, such as chicken or beef, in a flavorful blend of spices and seasonings. The meat is then skewered and grilled over charcoal or an open flame, giving it a smoky and charred flavor. Klungkung Satay is often served with a rich and creamy peanut sauce, along with steamed rice, sliced cucumbers, and onions. Over time, Klungkung Satay has gained popularity for its delicious taste and the unique blend of spices used in the marinade. It has become a favorite among locals and tourists alike, representing the rich culinary heritage of Klungkung and showcasing the flavors of Balinese cuisine.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(4, 4, 'Prepare the ingredients', 'Cook the meat', 'Toast the coconut', 'Blend the spices', 'Mix the ingredients', 'Serve and enjoy', '500 grams of finely chopped cooked meat (pork or chicken), 1 cup of grated coconut, 5 shallots, finely chopped, 4 cloves of garlic, minced, 2 teaspoons of turmeric powder, 1 thumb-sized ginger, grated, A handful of lemon basil leaves, finely chopped, 1 torch ginger flower (bunga kecombrang), thinly sliced', 'In a pan, sauté the finely chopped cooked meat until heated through. Add the minced garlic, chopped shallots, grated ginger, and turmeric powder. Stir-fry for a few minutes until the spices are fragrant and well combined with the meat.', 'In a separate pan, toast the grated coconut over low heat until golden brown and aromatic. Stir constantly to prevent burning.', 'In a blender or food processor, blend the shallots, garlic, turmeric powder, and grated ginger into a smooth paste.', 'In a mixing bowl, combine the cooked meat mixture, toasted coconut, blended spices, chopped lemon basil leaves, and sliced torch ginger flower. Mix well until all the ingredients are evenly coated and the flavors are well combined.', 'Klungkung Lawar is traditionally served at room temperature or slightly chilled. Garnish with additional lemon basil leaves and torch ginger flower for added freshness and presentation. Enjoy the rich and complex flavors of Klungkung Lawar, a true culinary delight that represents the essence of Balinese cuisine.', 'Klungkung Lawar is a traditional Balinese dish that originated from Klungkung, a regency in Bali, Indonesia. It has a long-standing history and is deeply rooted in the local culinary heritage. Lawar itself is a term used for a type of Balinese salad that typically consists of finely chopped or minced ingredients mixed with spices, grated coconut, and sometimes blood as a key ingredient. The history of Klungkung Lawar dates back generations, and it holds a significant cultural and social value in the region. It is often prepared and served during religious ceremonies, special occasions, and traditional Balinese rituals. The dish is known for its complex flavors, combining the richness of various ingredients such as meat, spices, coconut, and herbs. Klungkung Lawar showcases the creativity and culinary expertise of the local Balinese people, who have preserved the traditional recipe and cooking techniques throughout the years. It represents a harmonious blend of flavors, textures, and cultural heritage, making it an essential part of Balinese gastronomy and a true delight for food enthusiasts seeking an authentic taste of Klungkung.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(5, 5, 'Preparing the Suckling Pig', 'Stuffing the Pig', 'Roasting the Pig', 'Resting and Carving', 'Serving and Enjoying', NULL, 'Select a fresh, young suckling pig, preferably around 8-10 kilograms in weight. Thoroughly clean the pig, removing any hairs and internal organs. Score the skin of the pig in a diamond pattern to help the skin crisp up during roasting. Season the pig generously with a mixture of salt, pepper, garlic, and traditional Balinese spices such as turmeric, coriander, and ginger.', 'Prepare the stuffing mixture by combining chopped onions, garlic, ginger, lemongrass, turmeric, galangal, and other desired herbs and spices. Fill the cavity of the pig with the stuffing mixture, making sure to distribute it evenly throughout the body. Sew up the opening of the pig using kitchen twine to secure the stuffing inside.', 'Preheat the oven or fire pit to a high temperature, around 180-200 degrees Celsius. Place the stuffed pig on a roasting rack or spit, ensuring it is securely positioned. Cook the pig slowly and evenly, basting it regularly with a mixture of oil, water, and traditional Balinese spices for added flavor. Roast the pig for several hours, until the skin is golden brown and crispy, and the meat is tender and cooked through.', 'Once the pig is cooked, remove it from the oven or fire pit and let it rest for about 30 minutes. Carefully carve the pig into serving-sized portions, making sure to include both the crispy skin and succulent meat. Arrange the carved pieces on a serving platter, garnishing with fresh herbs and lime wedges for an extra touch of flavor.', 'Serve the Klungkung Suckling Pig as a centerpiece dish for special occasions, celebrations, or traditional Balinese feasts. Accompany it with a variety of side dishes, such as steamed rice, sambal matah (Balinese chili condiment), urap (mixed vegetables with grated coconut), and lawar (traditional Balinese salad). Encourage your guests to savor the crispy skin, tender meat, and rich flavors of the Klungkung Suckling Pig, experiencing the authentic taste of this renowned Balinese delicacy.', NULL, 'Klungkung Suckling Pig, also known as \"Babi Guling Klungkung\" in Indonesian, is a traditional Balinese dish with a rich history and cultural significance. The dish traces its roots back to the ancient culinary traditions of the Klungkung region in Bali, Indonesia. Suckling pig has been an integral part of Balinese ceremonies, rituals, and festive celebrations for centuries. It holds a special place in Balinese culture and is often served during important occasions such as temple ceremonies, weddings, and religious festivals. The origins of Klungkung Suckling Pig can be traced back to the royal court of Klungkung, where it was traditionally prepared as a symbol of wealth, prestige, and hospitality. The dish was initially reserved for the nobility and esteemed guests, but over time, it became popular among the wider Balinese community and gained recognition as a signature dish of the region. The preparation of Klungkung Suckling Pig is a labor-intensive process that involves marinating the pig with a blend of aromatic herbs and spices, such as turmeric, coriander, lemongrass, and ginger. The pig is then slowly roasted over an open fire or in a special oven until the skin turns crispy and golden brown, while the meat remains tender and succulent.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(6, 6, 'Prepare the batter', 'Heat the skillet', 'Pour the batter', 'Cook the laklak', 'Flip and cook the other side', 'Repeat the process', 'In a mixing bowl, combine rice flour, coconut milk, water, salt, and pandan essence. Mix well until the batter is smooth and lump-free. The consistency should be slightly thick but pourable.', 'Place a round skillet or a special laklak pan over medium heat. Brush it lightly with oil or use a non-stick cooking spray to prevent the laklak from sticking.', 'Using a ladle or a small cup, pour a small amount of the batter onto the skillet, creating round-shaped pancakes. The size of the laklak is usually about 5-6 centimeters in diameter.', 'Allow the laklak to cook for a few minutes until the bottom side is golden brown and the top side starts to set. You will notice small holes forming on the surface.', 'Gently flip the laklak using a spatula to cook the other side. Cook for another minute or so until it becomes lightly browned and cooked through.', 'Continue pouring the batter and cooking the laklak in batches until all the batter is used up. You can stack the cooked laklak on a plate, separating each layer with banana leaves or parchment paper to prevent sticking.', 'Klungkung Laklak is a traditional Balinese dessert that has a rich history dating back centuries. The origins of Laklak can be traced to the Klungkung Kingdom in Bali, where it was often prepared for special occasions and religious ceremonies. The name \"Laklak\" is derived from the Balinese word \"Lakar,\" which means small round shape. It is believed that Klungkung Laklak was initially created as an offering to the gods during temple rituals. Over time, it became popular among the local population and turned into a beloved sweet treat. The recipe for Klungkung Laklak has been passed down through generations, with slight variations in ingredients and techniques. Traditionally, it is made using rice flour, coconut milk, water, salt, and pandan essence. The batter is poured onto a round skillet or a special laklak pan and cooked until golden brown. Klungkung Laklak is typically served with grated coconut and a drizzle of palm sugar syrup, adding sweetness and flavor to the dish. The combination of soft and slightly chewy laklak with the fragrant coconut and sweet syrup creates a delightful taste experience.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(7, 7, 'Prepare the fish', 'Marinate the fish', 'Prepare the grill', 'Grill the fish', 'Serve the grilled fish', NULL, 'Start by selecting a fresh whole fish, such as snapper or grouper, and clean it thoroughly. Make shallow diagonal cuts on both sides of the fish to allow for better seasoning penetration.', 'In a bowl, combine ingredients for the marinade, which may include turmeric powder, garlic, shallots, lemongrass, ginger, salt, and pepper. Rub the marinade all over the fish, ensuring it coats both sides and the inside cavity. Let the fish marinate for at least 30 minutes to allow the flavors to infuse.', 'Preheat a charcoal or gas grill to medium-high heat. If using a charcoal grill, wait until the coals are hot and covered with a layer of white ash.', 'Place the marinated fish directly on the grill grates. Cook the fish for about 4-6 minutes per side, depending on the thickness, until the flesh is opaque and flakes easily with a fork. Flip the fish carefully to avoid sticking or breaking.', 'Once the fish is cooked, carefully transfer it to a serving platter. Garnish the fish with fresh herbs, such as cilantro or basil, and a squeeze of lime juice for added freshness. Serve the Klungkung Grilled Fish hot, accompanied by steamed rice and your choice of side dishes, such as sambal matah or grilled vegetables.', NULL, 'Klungkung Grilled Fish, also known as \"Ikan Bakar Klungkung\" in Indonesian, is a traditional dish from Klungkung, Bali. It is a popular seafood dish that showcases the rich flavors of Balinese cuisine. The history of Klungkung Grilled Fish can be traced back to the fishing communities in Klungkung, where fresh fish is readily available. The locals have perfected the art of grilling fish over open flames, creating a dish that is both flavorful and aromatic. The grilling method used for Klungkung Grilled Fish involves marinating the fish in a blend of herbs and spices, which may include turmeric, garlic, shallots, lemongrass, and ginger. The fish is then grilled over charcoal or an open fire, resulting in a smoky and charred exterior with tender and juicy flesh. This dish has become a staple in the culinary landscape of Klungkung and is often enjoyed by locals and visitors alike. The combination of fresh fish, aromatic spices, and the unique grilling technique creates a delightful sensory experience that reflects the rich cultural heritage of Klungkung.', '2023-06-18 05:16:08', '2023-06-18 05:16:08'),
(8, 8, 'Prepare the ingredients', 'Cook the filling', 'Make the dough', 'Shape the sweets', 'Steam the sweets123', 'Serve and enjoy123', 'Gather the necessary ingredients, which typically include glutinous rice flour, palm sugar, grated coconut, pandan leaves, and salt. These ingredients form the base of Klungkung Traditional Sweets.', 'Start by making the sweet filling for the sweets. In a pan, combine palm sugar, grated coconut, and a pinch of salt. Cook the mixture over low heat, stirring continuously until the palm sugar has melted and the coconut becomes fragrant and slightly caramelized. Set the filling aside to cool.', 'In a mixing bowl, combine glutinous rice flour, a bit of salt, and pandan juice (extracted from pandan leaves). Knead the mixture until it forms a smooth and pliable dough. If needed, add a little water or more flour to achieve the right consistency.', 'Take a small portion of the dough and flatten it with your palm. Place a small amount of the sweet filling in the center of the dough. Fold the edges of the dough over the filling, sealing it to form a small pouch or ball shape. Repeat this process until all the dough and filling are used.', 'Arrange the shaped sweets on a steamer tray lined with banana leaves or parchment paper. Steam the sweets over medium heat for about 15-20 minutes, or until the dough becomes translucent and cooked through.', 'Once the Klungkung Traditional Sweets are steamed and cooked, remove them from the steamer and let them cool slightly. Serve them as a delightful sweet treat, either as a snack or as a traditional dessert. Enjoy the combination of the soft and chewy dough with the sweet and flavorful filling.', 'Klungkung Traditional Sweets, also known as \"Jajan Klungkung\" in Indonesian, have a rich history deeply rooted in the culinary heritage of Klungkung, Bali. These traditional sweets have been enjoyed by generations and continue to be cherished as a part of the local culture. The history of Klungkung Traditional Sweets can be traced back to the ancient times when the region was known for its flourishing agricultural practices. The use of local ingredients such as glutinous rice flour, palm sugar, and grated coconut reflects the abundance of these resources in the area. The preparation of Klungkung Traditional Sweets involves traditional techniques that have been passed down through generations. The careful selection and combination of ingredients, along with the intricate shaping and steaming process, showcase the skill and craftsmanship of the local artisans. These sweets hold significance in various cultural and religious ceremonies in Klungkung, such as temple festivals, weddings, and other important occasions. They are often offered as a form of gratitude and devotion to the deities, symbolizing blessings, abundance, and harmony. Klungkung Traditional Sweets are not only a delicious treat but also a symbol of the cultural identity and heritage of Klungkung. They embody the essence of Balinese traditions, reflecting the deep connection between food, spirituality, and community in the region.', '2023-06-18 05:16:08', '2023-06-18 05:41:28');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `image`, `address`, `menu_available`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Klungkung Delights', 'location-images/BMZZwsuME2na3vhwKuCdNatJF3uhwt5kYL6WXvpV.jpg', 'Jl. Pahlawan No. 123, Klungkung', '1,2,3,7,8', 'Discover the culinary treasures of Klungkung at our flagship branch, Klungkung Delights. Situated in the heart of the city.', '2023-06-18 05:16:08', '2023-06-18 11:20:19'),
(2, 'Klungkung Spice House', 'location-images/vi4lvRJtLg3iSUZffgwnITMQpUimGHZCzKiYS04V.jpg', 'Jl. Raya Semarapura No. 88, Klungkung', '2,3,4', 'Welcome to Klungkung Spice House. Our restaurant invites you on a culinary adventure through the vibrant world of spices.', '2023-06-18 05:16:08', '2023-06-18 07:49:07'),
(3, 'Klungkung Street Bites', 'location-images/FatvpfYzigFxCGwzavaUb9XlnQOAopc57XLwbD9e.jpg', 'Jl. Diponegoro No. 77, Klungkung', '1,3,4', 'Embark on a culinary journey through the bustling streets of Klungkung at Klungkung Street Bites. Located in the heart of the city.', '2023-06-18 05:16:08', '2023-06-18 07:49:15'),
(4, 'Klungkung Coastal Flavors', 'location-images/JuXX3oe33rHMR8YZywVEl4R15m7FamNiR6ZTr0yT.jpg', 'Jl. Pantai Klotok No. 55, Klungkung', '1,2,4', 'Experience the taste of the ocean at Klungkung Coastal Flavors. Offers a unique dining experience that celebrates the bounties of the sea.', '2023-06-18 05:16:08', '2023-06-18 07:49:25');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `image`, `price`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Klungkung Chicken Rice', 'menu-images/IthmJSVvOkIAW9bGZwjbyjpUQvlEJYYwT0MjLM5L.jpg', '25.000', 'A flavorful combination of tender chicken, fragrant rice, and traditional Klungkung spices.', '2023-06-18 05:16:08', '2023-06-18 07:35:58'),
(2, 'Klungkung Betutu Duck', 'menu-images/I4Ns6aNNn8BrUB0UHhEIoDWtDMDITDPs0cQIdYYJ.jpg', '40.000', 'Slow-cooked duck marinated in a rich blend of Balinese spices, and roasted to perfection.', '2023-06-18 05:16:08', '2023-06-18 07:36:09'),
(3, 'Klungkung Satay', 'menu-images/ySEDY2NqpKCZow6VwtBVIyVTnqJPM3szC4gaoPSr.jpg', '5.000', 'Skewers of minced fish or chicken seasoned with aromatic herbs and spices.', '2023-06-18 05:16:08', '2023-06-18 07:37:18'),
(4, 'Klungkung Lawar', 'menu-images/H9qoQJr3wNQ97UmHnw5jgqh9RVKmhwvpXFeaoqhd.jpg', '30.000', 'A refreshing blend of mixed vegetables, shredded coconut, and Balinese spices.', '2023-06-18 05:16:08', '2023-06-18 07:37:25'),
(5, 'Klungkung Suckling Pig', 'menu-images/YfnORmKmPlIghIqc0YEgTXFSV5HPPa9jXkDlJfhH.png', '25.000', 'A signature dish of Klungkung, featuring tender roasted suckling pig with crispy skin and a medley of spices.', '2023-06-18 05:16:08', '2023-06-18 07:37:32'),
(6, 'Klungkung Rice Pancakes', 'menu-images/QSUuXpfD5rULMgB2xAxOTZSivAat00hPPHkhvRnH.jpg', '10.000', 'Delicate rice flour pancakes infused with coconut milk, served with a sweet palm sugar syrup.', '2023-06-18 05:16:08', '2023-06-18 07:37:41'),
(7, 'Klungkung Grilled Fish', 'menu-images/iW6xWv86RtviScP7EuGwXK6NsY4lHf9l5LiwS5cg.jpg', '40.000', 'Fresh fish marinated in a blend of spices, wrapped in banana leaves, and grilled to perfection.', '2023-06-18 05:16:08', '2023-06-18 07:37:50'),
(8, 'Klungkung Traditional Sweets', 'menu-images/uB4uQPV2kT1CtwtUw9U3vbhxLyhMlRwfQIc1YK66.png', '5.000', 'Indulge in a variety of Klungkung\'s traditional sweets, ranging from colorful jaje to crispy kue cucur.', '2023-06-18 05:16:08', '2023-06-18 07:00:04');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_05_23_024937_create_members_table', 1),
(6, '2023_06_16_145446_create_menus_table', 1),
(7, '2023_06_16_210544_create_feedback_table', 1),
(8, '2023_06_16_212127_create_histories_table', 1),
(9, '2023_06_17_101627_create_chefs_table', 1),
(10, '2023_06_17_105716_create_locations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$nOMAGXCLIjUfHFZX7vdYgeN.WcEpqp2qDUM4OZn508GDcDEy16BOq', NULL, '2023-06-18 05:16:08', '2023-06-18 05:16:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
