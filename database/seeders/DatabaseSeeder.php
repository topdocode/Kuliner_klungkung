<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Chef;
use App\Models\ChefTranslation;
use App\Models\Feedback;
use App\Models\FeedbackTranslation;
use App\Models\HistoriesTranslation;
use App\Models\History;
use App\Models\HistoryTranslation;
use App\Models\Location;
use App\Models\LocationTranslation;
use App\Models\Menu;
use App\Models\MenuTranslation;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
        ]);

        Menu::create([
            'id' => '1',
            'name' => 'Nasi Ayam Klungkung',
            'image' => 'menu-images/menu-1.jpg',
            'price' => '25.000',
            'description' => 'Perpaduan rasa ayam yang empuk, nasi yang harum, dan bumbu tradisional Klungkung.',
        ]);

        MenuTranslation::create([
            'menus_id' => '1',
            'language' => 'id',
            'name' => 'Nasi Ayam Klungkung',
            'image' => 'menu-images/menu-1.jpg',
            'price' => '25.000',
            'description' => 'Perpaduan rasa ayam yang empuk, nasi yang harum, dan bumbu tradisional Klungkung.',
        ]);

        MenuTranslation::create([
            'menus_id' => '1',
            'language' => 'en',
            'name' => 'Klungkung Chicken Rice',
            'image' => 'menu-images/menu-1.jpg',
            'price' => '25.000',
            'description' => 'A flavorful combination of tender chicken, fragrant rice, and traditional Klungkung spices.',
        ]);

        Menu::create([
            'id' => '2',
            'name' => 'Bebek Betutu Klungkung',
            'image' => 'menu-images/menu-2.jpeg',
            'price' => '40.000',
            'description' => 'Bebek yang dimasak lambat direndam dalam campuran bumbu Bali yang kaya, dan dipanggang hingga sempurna.',
        ]);

        MenuTranslation::create([
            'menus_id' => '2',
            'language' => 'id',
            'name' => 'Bebek Betutu Klungkung',
            'image' => 'menu-images/menu-2.jpeg',
            'price' => '40.000',
            'description' => 'Bebek yang dimasak lambat direndam dalam campuran bumbu Bali yang kaya, dan dipanggang hingga sempurna.',
        ]);

        MenuTranslation::create([
            'menus_id' => '2',
            'language' => 'en',
            'name' => 'Klungkung Betutu Duck',
            'image' => 'menu-images/menu-2.jpeg',
            'price' => '40.000',
            'description' => 'Slow-cooked duck marinated in a rich blend of Balinese spices, and roasted to perfection.',
        ]);

        Menu::create([
            'id' => '3',
            'name' => 'Sate Klungkung',
            'image' => 'menu-images/menu-3.jpg',
            'price' => '5.000',
            'description' => 'Tusuk sate ikan atau ayam cincang yang dibumbui dengan bumbu dan rempah aromatik.',
        ]);

        MenuTranslation::create([
            'menus_id' => '3',
            'language' => 'id',
            'name' => 'Sate Klungkung',
            'image' => 'menu-images/menu-3.jpg',
            'price' => '5.000',
            'description' => 'Tusuk sate ikan atau ayam cincang yang dibumbui dengan bumbu dan rempah aromatik.',
        ]);

        MenuTranslation::create([
            'menus_id' => '3',
            'language' => 'en',
            'name' => 'Klungkung Satay',
            'image' => 'menu-images/menu-3.jpg',
            'price' => '5.000',
            'description' => 'Skewers of minced fish or chicken seasoned with aromatic herbs and spices.',
        ]);

        Menu::create([
            'id' => '4',
            'name' => 'Lawar Klungkung',
            'image' => 'menu-images/menu-4.jpg',
            'price' => '30.000',
            'description' => 'Perpaduan yang menyegarkan dari campuran sayuran, kelapa parut, dan rempah-rempah Bali.',
        ]);

        MenuTranslation::create([
            'menus_id' => '4',
            'language' => 'id',
            'name' => 'Lawar Klungkung',
            'image' => 'menu-images/menu-4.jpg',
            'price' => '30.000',
            'description' => 'Perpaduan yang menyegarkan dari campuran sayuran, kelapa parut, dan rempah-rempah Bali.',
        ]);

        MenuTranslation::create([
            'menus_id' => '4',
            'language' => 'en',
            'name' => 'Klungkung Lawar',
            'image' => 'menu-images/menu-4.jpg',
            'price' => '30.000',
            'description' => 'A refreshing blend of mixed vegetables, shredded coconut, and Balinese spices.',
        ]);

        Menu::create([
            'id' => '5',
            'name' => 'Babi Guling Klungkung',
            'image' => 'menu-images/menu-5.jpg',
            'price' => '25.000',
            'description' => 'Hidangan khas Klungkung, menampilkan babi guling panggang yang empuk dengan kulit yang renyah dan campuran rempah-rempah.',
        ]);

        MenuTranslation::create([
            'menus_id' => '5',
            'language' => 'id',
            'name' => 'Babi Guling Klungkung',
            'image' => 'menu-images/menu-5.jpg',
            'price' => '25.000',
            'description' => 'Hidangan khas Klungkung, menampilkan babi guling panggang yang empuk dengan kulit yang renyah dan campuran rempah-rempah.',
        ]);

        MenuTranslation::create([
            'menus_id' => '5',
            'language' => 'en',
            'name' => 'Klungkung Suckling Pig',
            'image' => 'menu-images/menu-5.jpg',
            'price' => '25.000',
            'description' => 'A signature Klungkung dish, featuring tender roasted suckling pig with crispy skin and a mix of spices.',
        ]);

        Menu::create([
            'id' => '6',
            'name' => 'Lak Lak Klungkung',
            'image' => 'menu-images/menu-6.jpg',
            'price' => '10.000',
            'description' => 'Pancake tepung beras yang lembut diresapi dengan santan, disajikan dengan sirup gula aren yang manis.',
        ]);

        MenuTranslation::create([
            'menus_id' => '6',
            'language' => 'id',
            'name' => 'Lak Lak Klungkung',
            'image' => 'menu-images/menu-6.jpg',
            'price' => '10.000',
            'description' => 'Pancake tepung beras yang lembut diresapi dengan santan, disajikan dengan sirup gula aren yang manis.',
        ]);

        MenuTranslation::create([
            'menus_id' => '6',
            'language' => 'en',
            'name' => 'Klungkung Rice Pancakes',
            'image' => 'menu-images/menu-6.jpg',
            'price' => '10.000',
            'description' => 'Delicate rice flour pancakes infused with coconut milk, served with a sweet palm sugar syrup.',
        ]);

        Menu::create([
            'id' => '7',
            'name' => 'Ikan Bakar Klungkung',
            'image' => 'menu-images/menu-7.jpg',
            'price' => '40.000',
            'description' => 'Ikan segar direndam dalam racikan bumbu, dibungkus daun pisang, dan dipanggang hingga sempurna.',
        ]);

        MenuTranslation::create([
            'menus_id' => '7',
            'language' => 'id',
            'name' => 'Ikan Bakar Klungkung',
            'image' => 'menu-images/menu-7.jpg',
            'price' => '40.000',
            'description' => 'Ikan segar direndam dalam racikan bumbu, dibungkus daun pisang, dan dipanggang hingga sempurna.',
        ]);

        MenuTranslation::create([
            'menus_id' => '7',
            'language' => 'en',
            'name' => 'Klungkung Grilled Fish',
            'image' => 'menu-images/menu-7.jpg',
            'price' => '40.000',
            'description' => 'Fresh fish marinated in a blend of spices, wrapped in banana leaves, and grilled to perfection.',
        ]);

        Menu::create([
            'id' => '8',
            'name' => 'Jajanan Klungkung',
            'image' => 'menu-images/menu-8.jpg',
            'price' => '5.000',
            'description' => "Manjakan diri dengan berbagai manisan tradisional Klungkung, mulai dari jaje warna-warni hingga kue cucur yang renyah.",
        ]);

        MenuTranslation::create([
            'menus_id' => '8',
            'language' => 'id',
            'name' => 'Jajanan Klungkung',
            'image' => 'menu-images/menu-8.jpg',
            'price' => '5.000',
            'description' => "Manjakan diri dengan berbagai manisan tradisional Klungkung, mulai dari jaje warna-warni hingga kue cucur yang renyah.",
        ]);

        MenuTranslation::create([
            'menus_id' => '8',
            'language' => 'en',
            'name' => 'Klungkung Traditional Sweets',
            'image' => 'menu-images/menu-8.jpg',
            'price' => '5.000',
            'description' => "Indulge in a variety of Klungkung's traditional sweets, ranging from colorful jaje to crispy kue cucur.",
        ]);

        History::create([
            'menus_id' => '1',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Kumpulkan bahan-bahan berikut: potongan ayam segar, nasi wangi, serai, lengkuas, kunyit, sambal matah, bawang merah goreng, dan acar.',
            'title_2' => 'Masak ayam',
            'step_2' => 'Di dalam panci, rebus potongan ayam dengan air, serai, lengkuas, dan kunyit hingga ayam empuk dan matang sempurna. Angkat ayam dari panci dan sisihkan.',
            'title_3' => 'Masak nasi',
            'step_3' => 'Cuci beras harum sampai bersih dan tiriskan airnya. Di panci terpisah, tumis bawang merah iris, bawang putih cincang, dan jahe parut hingga harum. Tambahkan beras yang sudah dicuci ke dalam panci dan tumis selama beberapa menit. Tuang kaldu ayam atau air dan didihkan. Kecilkan api, tutup panci, dan biarkan nasi mendidih hingga matang dan mengembang.',
            'title_4' => 'Siapkan lauk pauk',
            'step_4' => 'Saat nasi sedang dimasak, siapkan lauk pauk. Buat sambal matah dengan mencampurkan bawang merah cincang halus, cabai, serai, dan air jeruk nipis. Goreng bawang merah sampai garing untuk dijadikan hiasan. Iris dan acar beberapa sayuran seperti mentimun dan wortel untuk iringan yang menyegarkan.',
            'title_5' => 'Pasang piring',
            'step_5' => 'Untuk menyajikannya, tempatkan nasi wangi dalam porsi yang banyak ke dalam mangkuk. Susun potongan ayam yang sudah matang di atas nasi. Hiasi dengan sesendok sambal matah dan taburkan bawang goreng renyah di atas ayam. Sajikan dengan acar sayuran.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Sajikan Nasi Ayam Klungkung buatan Anda untuk keluarga atau tamu Anda. Nasi yang harum, daging ayam yang empuk, dan bumbu yang gurih menciptakan hidangan yang harmonis dan memuaskan. Nikmati cita rasa unik warisan kuliner Klungkung dan nikmati setiap gigitan lezatnya.",
            'history' => "Nasi Ayam Klungkung, juga dikenal sebagai Nasi Ayam Klungkung, adalah hidangan tradisional Bali yang berasal dari Kabupaten Klungkung, Bali, Indonesia. Mahakarya kuliner ini kaya akan sejarah yang mengakar kuat dalam warisan budaya pulau ini. Sejarah Nasi Ayam Klungkung sudah ada sejak beberapa generasi dan telah diwariskan melalui keluarga Bali selama berabad-abad. Diyakini dibuat oleh ahli kuliner Klungkung, yang dengan hati-hati membuat hidangan ini untuk menampilkan cita rasa dan tradisi kuliner khas daerah tersebut. Nasi Ayam Klungkung memiliki ciri khas nasinya yang harum dimasak dengan berbagai bumbu dan rempah yang harum. Ayamnya diolah dengan teknik memasak tradisional sehingga menghasilkan daging yang empuk dan beraroma. Hidangan ini biasanya disajikan dengan berbagai bumbu seperti sambal matah, bawang merah goreng, dan acar sayuran, menambah lapisan rasa dan tekstur pada pengalaman keseluruhan. Selama bertahun-tahun, Nasi Ayam Klungkung telah menjadi hidangan ikonik di Bali yang disukai oleh penduduk lokal dan turis. Ini mewakili esensi masakan Bali, memadukan kesegaran bahan-bahan yang bersumber secara lokal dengan penguasaan metode memasak tradisional.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '1',
            'language' => 'id',
            'menus_id' => '1',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Kumpulkan bahan-bahan berikut: potongan ayam segar, nasi wangi, serai, lengkuas, kunyit, sambal matah, bawang merah goreng, dan acar.',
            'title_2' => 'Masak ayam',
            'step_2' => 'Di dalam panci, rebus potongan ayam dengan air, serai, lengkuas, dan kunyit hingga ayam empuk dan matang sempurna. Angkat ayam dari panci dan sisihkan.',
            'title_3' => 'Masak nasi',
            'step_3' => 'Cuci beras harum sampai bersih dan tiriskan airnya. Di panci terpisah, tumis bawang merah iris, bawang putih cincang, dan jahe parut hingga harum. Tambahkan beras yang sudah dicuci ke dalam panci dan tumis selama beberapa menit. Tuang kaldu ayam atau air dan didihkan. Kecilkan api, tutup panci, dan biarkan nasi mendidih hingga matang dan mengembang.',
            'title_4' => 'Siapkan lauk pauk',
            'step_4' => 'Saat nasi sedang dimasak, siapkan lauk pauk. Buat sambal matah dengan mencampurkan bawang merah cincang halus, cabai, serai, dan air jeruk nipis. Goreng bawang merah sampai garing untuk dijadikan hiasan. Iris dan acar beberapa sayuran seperti mentimun dan wortel untuk iringan yang menyegarkan.',
            'title_5' => 'Pasang piring',
            'step_5' => 'Untuk menyajikannya, tempatkan nasi wangi dalam porsi yang banyak ke dalam mangkuk. Susun potongan ayam yang sudah matang di atas nasi. Hiasi dengan sesendok sambal matah dan taburkan bawang goreng renyah di atas ayam. Sajikan dengan acar sayuran.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Sajikan Nasi Ayam Klungkung buatan Anda untuk keluarga atau tamu Anda. Nasi yang harum, daging ayam yang empuk, dan bumbu yang gurih menciptakan hidangan yang harmonis dan memuaskan. Nikmati cita rasa unik warisan kuliner Klungkung dan nikmati setiap gigitan lezatnya.",
            'history' => "Nasi Ayam Klungkung, juga dikenal sebagai Nasi Ayam Klungkung, adalah hidangan tradisional Bali yang berasal dari Kabupaten Klungkung, Bali, Indonesia. Mahakarya kuliner ini kaya akan sejarah yang mengakar kuat dalam warisan budaya pulau ini. Sejarah Nasi Ayam Klungkung sudah ada sejak beberapa generasi dan telah diwariskan melalui keluarga Bali selama berabad-abad. Diyakini dibuat oleh ahli kuliner Klungkung, yang dengan hati-hati membuat hidangan ini untuk menampilkan cita rasa dan tradisi kuliner khas daerah tersebut. Nasi Ayam Klungkung memiliki ciri khas nasinya yang harum dimasak dengan berbagai bumbu dan rempah yang harum. Ayamnya diolah dengan teknik memasak tradisional sehingga menghasilkan daging yang empuk dan beraroma. Hidangan ini biasanya disajikan dengan berbagai bumbu seperti sambal matah, bawang merah goreng, dan acar sayuran, menambah lapisan rasa dan tekstur pada pengalaman keseluruhan. Selama bertahun-tahun, Nasi Ayam Klungkung telah menjadi hidangan ikonik di Bali yang disukai oleh penduduk lokal dan turis. Ini mewakili esensi masakan Bali, memadukan kesegaran bahan-bahan yang bersumber secara lokal dengan penguasaan metode memasak tradisional.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '1',
            'language' => 'en',
            'menus_id' => '1',
            'title_1' => 'Prepare the ingredients',
            'step_1' => 'Gather the following ingredients: fresh chicken pieces, fragrant rice, lemongrass, galangal, turmeric, sambal matah, crispy fried shallots, and pickled vegetables.',
            'title_2' => 'Cook the chicken',
            'step_2' => 'In a pot, boil the chicken pieces with water, lemongrass, galangal, and turmeric until the chicken is tender and fully cooked. Remove the chicken from the pot and set it aside.',
            'title_3' => 'Cook the rice',
            'step_3' => 'Wash the fragrant rice thoroughly and drain the water. In a separate pot, sauté some sliced shallots, minced garlic, and grated ginger until fragrant. Add the washed rice to the pot and stir-fry it for a few minutes. Pour in the chicken broth or water and bring it to a boil. Reduce the heat, cover the pot, and let the rice simmer until it is cooked and fluffy.',
            'title_4' => 'Prepare the side dishes',
            'step_4' => 'While the rice is cooking, prepare the side dishes. Make the sambal matah by mixing finely chopped shallots, chili peppers, lemongrass, and lime juice. Fry shallots until crispy to make the garnish. Slice and pickle some vegetables like cucumber and carrots for a refreshing accompaniment.',
            'title_5' => 'Assemble the dish',
            'step_5' => 'To serve, place a generous portion of fragrant rice in a bowl. Arrange the cooked chicken pieces on top of the rice. Garnish with a spoonful of sambal matah and sprinkle crispy fried shallots over the chicken. Serve with a side of pickled vegetables.',
            'title_6' => 'Serve and enjoy',
            'step_6' => "Present your homemade Klungkung Chicken Rice to your family or guests. The fragrant rice, tender chicken, and flavorful condiments create a harmonious and satisfying meal. Enjoy the unique taste of Klungkung's culinary heritage and savor every delicious bite.",
            'history' => "Klungkung Chicken Rice, also known as Nasi Ayam Klungkung, is a traditional Balinese dish that originated in the Klungkung regency of Bali, Indonesia. This culinary masterpiece has a rich history deeply rooted in the island's cultural heritage. The history of Klungkung Chicken Rice dates back many generations and has been passed down through Balinese families for centuries. It is believed to have been created by the skilled culinary artisans of Klungkung, who carefully crafted this dish to showcase the distinct flavors and culinary traditions of the region. Klungkung Chicken Rice is characterized by its fragrant rice cooked in a variety of aromatic herbs and spices. The chicken is prepared using traditional cooking techniques, resulting in tender and flavorful meat. The dish is typically served with an array of condiments such as sambal matah, crispy fried shallots, and pickled vegetables, adding layers of taste and texture to the overall experience. Over the years, Klungkung Chicken Rice has become an iconic dish in Bali, beloved by locals and tourists alike. It represents the essence of Balinese cuisine, combining the freshness of locally sourced ingredients with the mastery of traditional cooking methods.",
        ]);

        History::create([
            'menus_id' => '2',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Mulailah dengan mengumpulkan bahan-bahan yang diperlukan untuk Bebek Betutu Klungkung. Anda membutuhkan bebek utuh, rempah-rempah aromatik seperti kunyit, jahe, bawang merah, bawang putih, dan cabai, serta berbagai bumbu dan bumbu seperti serai, daun jeruk purut, dan lengkuas.',
            'title_2' => 'Siapkan pasta bumbu',
            'step_2' => 'Dalam blender atau lesung dan alu, gabungkan rempah-rempah aromatik, herba, dan bumbu untuk membuat pasta bumbu yang harum. Haluskan atau giling sampai Anda mendapatkan konsistensi yang halus.',
            'title_3' => 'Rendam bebek',
            'step_3' => 'Gosok pasta bumbu secara menyeluruh di atas bebek, pastikan untuk melapisinya secara merata. Biarkan bebek diasinkan setidaknya selama 2 jam atau sebaiknya semalaman di lemari es. Ini akan membuat bumbu meresap ke dalam daging.',
            'title_4' => 'Bungkus bebek',
            'step_4' => 'Ambil daun pisang besar atau aluminium foil dan bungkus bebek yang sudah diasinkan dengan rapat, pastikan tertutup rapat. Ini membantu mengunci rasa dan kelembapan selama proses memasak.',
            'title_5' => 'Masak bebek dengan lambat',
            'step_5' => 'Tempatkan bebek yang dibungkus dalam oven yang sudah dipanaskan sebelumnya atau lubang bawah tanah tradisional (biasanya digunakan dalam masakan Bali). Masak bebek dengan lambat pada suhu rendah, sekitar 150-160°C (300-325°F), selama beberapa jam. Memasak lambat memungkinkan rasa berkembang dan daging menjadi empuk dan segar.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah bebek matang, buka bungkusnya dengan hati-hati dari daun pisang atau kertas timah. Bebek Betutu Klungkung secara tradisional disajikan dengan nasi putih, sambal Bali, dan pilihan lauk pauk seperti lawar (salad sayur Bali) dan urap (sayur campur kukus). Daging yang empuk dan beraroma, diresapi dengan rempah-rempah aromatik, memanjakan indra.",
            'history' => "Bebek Betutu Klungkung adalah hidangan tradisional Bali yang kaya akan sejarah. Dipercaya berasal dari Klungkung, sebuah kabupaten di Bali, Indonesia. Hidangan ini sudah ada sejak berabad-abad yang lalu dan dianggap sebagai kekayaan kuliner di wilayah tersebut. Betutu mengacu pada metode memasak bebek yang dimasak perlahan dengan campuran rempah-rempah dan rempah-rempah yang kaya. Hidangan ini disiapkan secara tradisional untuk acara-acara khusus dan upacara keagamaan, melambangkan rasa kebersamaan dan perayaan. Proses memasaknya melibatkan merendam bebek dalam bumbu yang terbuat dari kunyit, jahe, bawang merah, bawang putih, cabai, dan bahan pewangi lainnya. Bebek yang diasinkan kemudian dibungkus dengan daun pisang atau kertas timah dan dimasak perlahan dengan api kecil atau di dalam lubang bawah tanah selama beberapa jam. Metode memasak lambat ini memungkinkan bumbu meresap ke dalam daging, menghasilkan bebek yang lembut dan lezat dengan rasa yang kaya dan aromatik. Bebek Betutu Klungkung telah mendapatkan popularitas tidak hanya di kalangan penduduk setempat tetapi juga di kalangan wisatawan yang mencari cita rasa asli masakan Bali. Ini sering disajikan dengan nasi, sambal matah (bumbu cabai tradisional Bali), lawar (salad sayuran Bali), dan lauk pauk lainnya, menciptakan hidangan yang beraroma dan memuaskan.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '2',
            'language' => 'id',
            'menus_id' => '2',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Mulailah dengan mengumpulkan bahan-bahan yang diperlukan untuk Bebek Betutu Klungkung. Anda membutuhkan bebek utuh, rempah-rempah aromatik seperti kunyit, jahe, bawang merah, bawang putih, dan cabai, serta berbagai bumbu dan bumbu seperti serai, daun jeruk purut, dan lengkuas.',
            'title_2' => 'Siapkan pasta bumbu',
            'step_2' => 'Dalam blender atau lesung dan alu, gabungkan rempah-rempah aromatik, herba, dan bumbu untuk membuat pasta bumbu yang harum. Haluskan atau giling sampai Anda mendapatkan konsistensi yang halus.',
            'title_3' => 'Rendam bebek',
            'step_3' => 'Gosok pasta bumbu secara menyeluruh di atas bebek, pastikan untuk melapisinya secara merata. Biarkan bebek diasinkan setidaknya selama 2 jam atau sebaiknya semalaman di lemari es. Ini akan membuat bumbu meresap ke dalam daging.',
            'title_4' => 'Bungkus bebek',
            'step_4' => 'Ambil daun pisang besar atau aluminium foil dan bungkus bebek yang sudah diasinkan dengan rapat, pastikan tertutup rapat. Ini membantu mengunci rasa dan kelembapan selama proses memasak.',
            'title_5' => 'Masak bebek dengan lambat',
            'step_5' => 'Tempatkan bebek yang dibungkus dalam oven yang sudah dipanaskan sebelumnya atau lubang bawah tanah tradisional (biasanya digunakan dalam masakan Bali). Masak bebek dengan lambat pada suhu rendah, sekitar 150-160°C (300-325°F), selama beberapa jam. Memasak lambat memungkinkan rasa berkembang dan daging menjadi empuk dan segar.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah bebek matang, buka bungkusnya dengan hati-hati dari daun pisang atau kertas timah. Bebek Betutu Klungkung secara tradisional disajikan dengan nasi putih, sambal Bali, dan pilihan lauk pauk seperti lawar (salad sayur Bali) dan urap (sayur campur kukus). Daging yang empuk dan beraroma, diresapi dengan rempah-rempah aromatik, memanjakan indra.",
            'history' => "Bebek Betutu Klungkung adalah hidangan tradisional Bali yang kaya akan sejarah. Dipercaya berasal dari Klungkung, sebuah kabupaten di Bali, Indonesia. Hidangan ini sudah ada sejak berabad-abad yang lalu dan dianggap sebagai kekayaan kuliner di wilayah tersebut. Betutu mengacu pada metode memasak bebek yang dimasak perlahan dengan campuran rempah-rempah dan rempah-rempah yang kaya. Hidangan ini disiapkan secara tradisional untuk acara-acara khusus dan upacara keagamaan, melambangkan rasa kebersamaan dan perayaan. Proses memasaknya melibatkan merendam bebek dalam bumbu yang terbuat dari kunyit, jahe, bawang merah, bawang putih, cabai, dan bahan pewangi lainnya. Bebek yang diasinkan kemudian dibungkus dengan daun pisang atau kertas timah dan dimasak perlahan dengan api kecil atau di dalam lubang bawah tanah selama beberapa jam. Metode memasak lambat ini memungkinkan bumbu meresap ke dalam daging, menghasilkan bebek yang lembut dan lezat dengan rasa yang kaya dan aromatik. Bebek Betutu Klungkung telah mendapatkan popularitas tidak hanya di kalangan penduduk setempat tetapi juga di kalangan wisatawan yang mencari cita rasa asli masakan Bali. Ini sering disajikan dengan nasi, sambal matah (bumbu cabai tradisional Bali), lawar (salad sayuran Bali), dan lauk pauk lainnya, menciptakan hidangan yang beraroma dan memuaskan.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '2',
            'language' => 'en',
            'menus_id' => '2',
            'title_1' => 'Prepare the ingredients',
            'step_1' => 'Start by gathering the necessary ingredients for Klungkung Betutu Duck. You will need a whole duck, aromatic spices like turmeric, ginger, shallots, garlic, and chili peppers, as well as a variety of herbs and seasonings such as lemongrass, kaffir lime leaves, and galangal.',
            'title_2' => 'Prepare the spice paste',
            'step_2' => 'In a blender or mortar and pestle, combine the aromatic spices, herbs, and seasonings to create a fragrant spice paste. Blend or grind until you achieve a smooth consistency.',
            'title_3' => 'Marinate the duck',
            'step_3' => 'Rub the spice paste thoroughly over the duck, making sure to coat it evenly. Allow the duck to marinate for at least 2 hours or preferably overnight in the refrigerator. This will allow the flavors to penetrate the meat.',
            'title_4' => 'Wrap the duck',
            'step_4' => 'Take a large banana leaf or aluminum foil and wrap the marinated duck tightly, ensuring that it is fully sealed. This helps to lock in the flavors and moisture during the cooking process.',
            'title_5' => 'Slow-cook the duck',
            'step_5' => 'Place the wrapped duck in a preheated oven or a traditional underground pit (commonly used in Balinese cooking). Slow-cook the duck at a low temperature, around 150-160°C (300-325°F), for several hours. The slow cooking allows the flavors to develop and the meat to become tender and succulent.',
            'title_6' => 'Serve and enjoy',
            'step_6' => "Once the duck is cooked, carefully unwrap it from the banana leaf or foil. The Klungkung Betutu Duck is traditionally served with steamed rice, Balinese sambal, and a selection of side dishes such as lawar (Balinese vegetable salad) and urap (steamed mixed vegetables). The tender and flavorful meat, infused with aromatic spices, is a delight for the senses.",
            'history' => "Klungkung Betutu Duck is a traditional Balinese dish with a rich history. It is believed to have originated in Klungkung, a regency in Bali, Indonesia. The dish dates back centuries and is considered a culinary treasure of the region. Betutu refers to the cooking method of slow-cooking the duck with a rich blend of aromatic spices and herbs. The dish was traditionally prepared for special occasions and religious ceremonies, symbolizing a sense of togetherness and celebration. The cooking process involves marinating the duck in a spice paste made from turmeric, ginger, shallots, garlic, chili peppers, and other fragrant ingredients. The marinated duck is then wrapped in banana leaves or foil and slow-cooked over a low flame or in an underground pit for several hours. This slow cooking method allows the flavors to infuse the meat, resulting in tender and succulent duck with a rich and aromatic taste. Klungkung Betutu Duck has gained popularity not only among the locals but also among tourists seeking an authentic taste of Balinese cuisine. It is often served with steamed rice, sambal matah (a traditional Balinese chili condiment), lawar (Balinese vegetable salad), and other side dishes, creating a flavorful and satisfying meal.",
        ]);

        History::create([
            'menus_id' => '3',
            'title_1' => 'Siapkan rendaman',
            'step_1' => 'Dalam mangkuk pencampur, campurkan kecap, kecap manis (kecap manis), bawang putih, jahe, serai, kunyit, dan bumbu dan bumbu lain yang diinginkan. Aduk rata untuk membuat rendaman beraroma.',
            'title_2' => 'Rendam dagingnya',
            'step_2' => 'Potong daging pilihan Anda, seperti ayam atau sapi, menjadi potongan-potongan kecil seukuran gigitan. Masukkan daging ke dalam rendaman dan pastikan setiap bagian terlapisi secara merata. Biarkan daging diasinkan setidaknya selama 1-2 jam, atau sebaiknya semalaman, di lemari es untuk menambah rasa.',
            'title_3' => 'Tusuk dagingnya',
            'step_3' => 'Masukkan daging yang sudah diasinkan ke tusuk sate, pastikan potongannya berdekatan tetapi tidak terlalu padat. Ini akan memungkinkan untuk memasak secara merata dan penyerapan rendaman yang lebih baik.',
            'title_4' => 'bakar sate',
            'step_4' => 'Panaskan panggangan atau wajan panggangan dengan api sedang-tinggi. Tempatkan tusuk sate di atas panggangan dan masak selama sekitar 3-4 menit per sisi, atau sampai daging matang dan hangus dengan baik. Lumuri sate dengan sisa bumbu selama proses pemanggangan untuk menambah rasa.',
            'title_5' => 'Siapkan saus kacang',
            'step_5' => 'Sambil memanggang sate, siapkan bumbu kacangnya. Dalam panci, panaskan minyak sayur dan tumis bawang putih dan bawang merah hingga harum. Tambahkan selai kacang, santan, kecap, gula aren, dan sedikit air jeruk nipis. Aduk rata dan didihkan dengan api kecil sampai saus sedikit mengental. Sesuaikan bumbu sesuai selera.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah sate matang, keluarkan dari panggangan dan tata di atas piring saji. Sajikan Sate Klungkung dengan bumbu kacang yang sudah disiapkan, bersama nasi putih, irisan timun, dan bawang bombay. Hiasi dengan kacang cincang dan daun ketumbar segar untuk menambah kerenyahan dan kesegaran.",
            'history' => "Sate Klungkung adalah makanan tradisional yang berasal dari Klungkung, Bali. Hal ini diyakini telah dipengaruhi oleh tradisi kuliner Indonesia dan Bali. Sejarah Sate Klungkung sudah ada sejak bertahun-tahun yang lalu, dan telah menjadi jajanan pinggir jalan yang populer dan hidangan pokok dalam perayaan dan upacara setempat. Sate ini biasanya dibuat dengan mengasinkan potongan daging seukuran gigitan, seperti ayam atau sapi, dalam campuran bumbu dan bumbu yang beraroma. Dagingnya kemudian ditusuk dan dipanggang di atas arang atau api terbuka, memberikan rasa berasap dan hangus. Sate Klungkung sering disajikan dengan saus kacang yang kental dan kental, bersama dengan nasi, irisan mentimun, dan bawang. Seiring berjalannya waktu, Sate Klungkung semakin populer karena rasanya yang enak dan keunikan perpaduan rempah-rempah yang digunakan dalam bumbunya. Ini telah menjadi favorit di antara penduduk lokal dan turis, mewakili warisan kuliner Klungkung yang kaya dan menampilkan cita rasa masakan Bali.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '3',
            'language' => 'id',
            'menus_id' => '3',
            'title_1' => 'Siapkan rendaman',
            'step_1' => 'Dalam mangkuk pencampur, campurkan kecap, kecap manis (kecap manis), bawang putih, jahe, serai, kunyit, dan bumbu dan bumbu lain yang diinginkan. Aduk rata untuk membuat rendaman beraroma.',
            'title_2' => 'Rendam dagingnya',
            'step_2' => 'Potong daging pilihan Anda, seperti ayam atau sapi, menjadi potongan-potongan kecil seukuran gigitan. Masukkan daging ke dalam rendaman dan pastikan setiap bagian terlapisi secara merata. Biarkan daging diasinkan setidaknya selama 1-2 jam, atau sebaiknya semalaman, di lemari es untuk menambah rasa.',
            'title_3' => 'Tusuk dagingnya',
            'step_3' => 'Masukkan daging yang sudah diasinkan ke tusuk sate, pastikan potongannya berdekatan tetapi tidak terlalu padat. Ini akan memungkinkan untuk memasak secara merata dan penyerapan rendaman yang lebih baik.',
            'title_4' => 'bakar sate',
            'step_4' => 'Panaskan panggangan atau wajan panggangan dengan api sedang-tinggi. Tempatkan tusuk sate di atas panggangan dan masak selama sekitar 3-4 menit per sisi, atau sampai daging matang dan hangus dengan baik. Lumuri sate dengan sisa bumbu selama proses pemanggangan untuk menambah rasa.',
            'title_5' => 'Siapkan saus kacang',
            'step_5' => 'Sambil memanggang sate, siapkan bumbu kacangnya. Dalam panci, panaskan minyak sayur dan tumis bawang putih dan bawang merah hingga harum. Tambahkan selai kacang, santan, kecap, gula aren, dan sedikit air jeruk nipis. Aduk rata dan didihkan dengan api kecil sampai saus sedikit mengental. Sesuaikan bumbu sesuai selera.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah sate matang, keluarkan dari panggangan dan tata di atas piring saji. Sajikan Sate Klungkung dengan bumbu kacang yang sudah disiapkan, bersama nasi putih, irisan timun, dan bawang bombay. Hiasi dengan kacang cincang dan daun ketumbar segar untuk menambah kerenyahan dan kesegaran.",
            'history' => "Sate Klungkung adalah makanan tradisional yang berasal dari Klungkung, Bali. Hal ini diyakini telah dipengaruhi oleh tradisi kuliner Indonesia dan Bali. Sejarah Sate Klungkung sudah ada sejak bertahun-tahun yang lalu, dan telah menjadi jajanan pinggir jalan yang populer dan hidangan pokok dalam perayaan dan upacara setempat. Sate ini biasanya dibuat dengan mengasinkan potongan daging seukuran gigitan, seperti ayam atau sapi, dalam campuran bumbu dan bumbu yang beraroma. Dagingnya kemudian ditusuk dan dipanggang di atas arang atau api terbuka, memberikan rasa berasap dan hangus. Sate Klungkung sering disajikan dengan saus kacang yang kental dan kental, bersama dengan nasi, irisan mentimun, dan bawang. Seiring berjalannya waktu, Sate Klungkung semakin populer karena rasanya yang enak dan keunikan perpaduan rempah-rempah yang digunakan dalam bumbunya. Ini telah menjadi favorit di antara penduduk lokal dan turis, mewakili warisan kuliner Klungkung yang kaya dan menampilkan cita rasa masakan Bali.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '3',
            'language' => 'en',
            'menus_id' => '3',
            'title_1' => 'Prepare the marinade',
            'step_1' => 'In a mixing bowl, combine soy sauce, kecap manis (sweet soy sauce), garlic, ginger, lemongrass, turmeric, and other desired spices and seasonings. Mix well to create a flavorful marinade.',
            'title_2' => 'Marinate the meat',
            'step_2' => 'Cut your choice of meat, such as chicken or beef, into small, bite-sized pieces. Place the meat in the marinade and make sure each piece is coated evenly. Allow the meat to marinate for at least 1-2 hours, or preferably overnight, in the refrigerator to enhance the flavors.',
            'title_3' => 'Skewer the meat',
            'step_3' => 'Thread the marinated meat onto skewers, ensuring that the pieces are close together but not tightly packed. This will allow for even cooking and better absorption of the marinade.',
            'title_4' => 'Grill the satay',
            'step_4' => 'Preheat a grill or grill pan to medium-high heat. Place the skewers on the grill and cook for about 3-4 minutes per side, or until the meat is cooked through and nicely charred. Baste the satay with the remaining marinade during the grilling process for added flavor.',
            'title_5' => 'Prepare the peanut sauce',
            'step_5' => 'While the satay is grilling, prepare the peanut sauce. In a saucepan, heat vegetable oil and sauté garlic and shallots until fragrant. Add peanut butter, coconut milk, soy sauce, palm sugar, and a splash of lime juice. Stir well and simmer over low heat until the sauce thickens slightly. Adjust the seasonings to taste.',
            'title_6' => 'Serve and enjoy',
            'step_6' => "Once the satay is cooked, remove it from the grill and arrange it on a serving platter. Serve the Klungkung Satay with the prepared peanut sauce, along with steamed rice, sliced cucumbers, and onions. Garnish with chopped peanuts and fresh cilantro for added crunch and freshness.",
            'history' => "Klungkung Satay is a traditional dish originating from Klungkung, Bali. It is believed to have been influenced by Indonesian and Balinese culinary traditions. The history of Klungkung Satay dates back many years, and it has become a popular street food and a staple dish in local celebrations and ceremonies. The satay is typically made by marinating bite-sized pieces of meat, such as chicken or beef, in a flavorful blend of spices and seasonings. The meat is then skewered and grilled over charcoal or an open flame, giving it a smoky and charred flavor. Klungkung Satay is often served with a rich and creamy peanut sauce, along with steamed rice, sliced cucumbers, and onions. Over time, Klungkung Satay has gained popularity for its delicious taste and the unique blend of spices used in the marinade. It has become a favorite among locals and tourists alike, representing the rich culinary heritage of Klungkung and showcasing the flavors of Balinese cuisine.",
        ]);

        History::create([
            'menus_id' => '4',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => '500 gram daging matang cincang halus (babi atau ayam), 1 cangkir kelapa parut, 5 bawang merah, cincang halus, 4 siung bawang putih, cincang, 2 sendok teh bubuk kunyit, 1 jahe sebesar ibu jari, parut, segenggam lemon daun kemangi, cincang halus, 1 kuntum bunga kecombrang, iris tipis',
            'title_2' => 'Masak dagingnya',
            'step_2' => 'Dalam wajan, tumis daging cincang halus sampai matang. Tambahkan bawang putih cincang, bawang merah cincang, jahe parut, dan bubuk kunyit. Tumis selama beberapa menit hingga bumbu harum dan tercampur rata dengan daging.',
            'title_3' => 'Panggang kelapa',
            'step_3' => 'Dalam wajan terpisah, sangrai kelapa parut dengan api kecil hingga berwarna cokelat keemasan dan harum. Aduk terus untuk mencegah pembakaran.',
            'title_4' => 'Haluskan bumbu',
            'step_4' => 'Dalam blender atau pengolah makanan, haluskan bawang merah, bawang putih, bubuk kunyit, dan jahe parut menjadi pasta halus.',
            'title_5' => 'Campur bahannya',
            'step_5' => 'Dalam mangkuk pengaduk, campurkan campuran daging yang sudah dimasak, kelapa panggang, rempah-rempah yang dihaluskan, daun kemangi lemon cincang, dan irisan bunga jahe obor. Aduk rata sampai semua bahan terlapisi secara merata dan rasanya tercampur dengan baik.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Lawar Klungkung secara tradisional disajikan pada suhu kamar atau sedikit dingin. Hiasi dengan tambahan daun kemangi lemon dan bunga kecombrang untuk menambah kesegaran dan penyajian. Nikmati cita rasa Lawar Klungkung yang kaya dan kompleks, kenikmatan kuliner sejati yang mewakili esensi masakan Bali.",
            'history' => "Lawar Klungkung adalah hidangan tradisional Bali yang berasal dari Klungkung, sebuah kabupaten di Bali, Indonesia. Ini memiliki sejarah panjang dan berakar kuat pada warisan kuliner lokal. Lawar sendiri adalah istilah yang digunakan untuk sejenis rujak khas Bali yang biasanya terdiri dari bahan-bahan yang dicincang halus atau dicincang dicampur dengan bumbu, parutan kelapa, dan terkadang darah sebagai bahan utamanya. Sejarah Lawar Klungkung berasal dari generasi ke generasi, dan memiliki nilai budaya dan sosial yang signifikan di wilayah tersebut. Itu sering disiapkan dan disajikan selama upacara keagamaan, acara-acara khusus, dan ritual tradisional Bali. Hidangan ini terkenal dengan rasa yang kompleks, memadukan kekayaan berbagai bahan seperti daging, rempah-rempah, kelapa, dan rempah-rempah. Lawar Klungkung menampilkan kreativitas dan keahlian kuliner masyarakat lokal Bali yang telah melestarikan resep tradisional dan teknik memasak selama bertahun-tahun. Ini mewakili perpaduan yang harmonis antara rasa, tekstur, dan warisan budaya, menjadikannya bagian penting dari keahlian memasak Bali dan kenikmatan sejati bagi penggemar makanan yang mencari cita rasa asli Klungkung.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '4',
            'language' => 'id',
            'menus_id' => '4',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => '500 gram daging matang cincang halus (babi atau ayam), 1 cangkir kelapa parut, 5 bawang merah, cincang halus, 4 siung bawang putih, cincang, 2 sendok teh bubuk kunyit, 1 jahe sebesar ibu jari, parut, segenggam lemon daun kemangi, cincang halus, 1 kuntum bunga kecombrang, iris tipis',
            'title_2' => 'Masak dagingnya',
            'step_2' => 'Dalam wajan, tumis daging cincang halus sampai matang. Tambahkan bawang putih cincang, bawang merah cincang, jahe parut, dan bubuk kunyit. Tumis selama beberapa menit hingga bumbu harum dan tercampur rata dengan daging.',
            'title_3' => 'Panggang kelapa',
            'step_3' => 'Dalam wajan terpisah, sangrai kelapa parut dengan api kecil hingga berwarna cokelat keemasan dan harum. Aduk terus untuk mencegah pembakaran.',
            'title_4' => 'Haluskan bumbu',
            'step_4' => 'Dalam blender atau pengolah makanan, haluskan bawang merah, bawang putih, bubuk kunyit, dan jahe parut menjadi pasta halus.',
            'title_5' => 'Campur bahannya',
            'step_5' => 'Dalam mangkuk pengaduk, campurkan campuran daging yang sudah dimasak, kelapa panggang, rempah-rempah yang dihaluskan, daun kemangi lemon cincang, dan irisan bunga jahe obor. Aduk rata sampai semua bahan terlapisi secara merata dan rasanya tercampur dengan baik.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Lawar Klungkung secara tradisional disajikan pada suhu kamar atau sedikit dingin. Hiasi dengan tambahan daun kemangi lemon dan bunga kecombrang untuk menambah kesegaran dan penyajian. Nikmati cita rasa Lawar Klungkung yang kaya dan kompleks, kenikmatan kuliner sejati yang mewakili esensi masakan Bali.",
            'history' => "Lawar Klungkung adalah hidangan tradisional Bali yang berasal dari Klungkung, sebuah kabupaten di Bali, Indonesia. Ini memiliki sejarah panjang dan berakar kuat pada warisan kuliner lokal. Lawar sendiri adalah istilah yang digunakan untuk sejenis rujak khas Bali yang biasanya terdiri dari bahan-bahan yang dicincang halus atau dicincang dicampur dengan bumbu, parutan kelapa, dan terkadang darah sebagai bahan utamanya. Sejarah Lawar Klungkung berasal dari generasi ke generasi, dan memiliki nilai budaya dan sosial yang signifikan di wilayah tersebut. Itu sering disiapkan dan disajikan selama upacara keagamaan, acara-acara khusus, dan ritual tradisional Bali. Hidangan ini terkenal dengan rasa yang kompleks, memadukan kekayaan berbagai bahan seperti daging, rempah-rempah, kelapa, dan rempah-rempah. Lawar Klungkung menampilkan kreativitas dan keahlian kuliner masyarakat lokal Bali yang telah melestarikan resep tradisional dan teknik memasak selama bertahun-tahun. Ini mewakili perpaduan yang harmonis antara rasa, tekstur, dan warisan budaya, menjadikannya bagian penting dari keahlian memasak Bali dan kenikmatan sejati bagi penggemar makanan yang mencari cita rasa asli Klungkung.",
        ]);

        HistoriesTranslation::create([
            'histories_id' => '4',
            'language' => 'en',
            'menus_id' => '4',
            'title_1' => 'Prepare the ingredients',
            'step_1' => '500 grams of finely chopped cooked meat (pork or chicken), 1 cup of grated coconut, 5 shallots, finely chopped, 4 cloves of garlic, minced, 2 teaspoons of turmeric powder, 1 thumb-sized ginger, grated, A handful of lemon basil leaves, finely chopped, 1 torch ginger flower (bunga kecombrang), thinly sliced',
            'title_2' => 'Cook the meat',
            'step_2' => 'In a pan, sauté the finely chopped cooked meat until heated through. Add the minced garlic, chopped shallots, grated ginger, and turmeric powder. Stir-fry for a few minutes until the spices are fragrant and well combined with the meat.',
            'title_3' => 'Toast the coconut',
            'step_3' => 'In a separate pan, toast the grated coconut over low heat until golden brown and aromatic. Stir constantly to prevent burning.',
            'title_4' => 'Blend the spices',
            'step_4' => 'In a blender or food processor, blend the shallots, garlic, turmeric powder, and grated ginger into a smooth paste.',
            'title_5' => 'Mix the ingredients',
            'step_5' => 'In a mixing bowl, combine the cooked meat mixture, toasted coconut, blended spices, chopped lemon basil leaves, and sliced torch ginger flower. Mix well until all the ingredients are evenly coated and the flavors are well combined.',
            'title_6' => 'Serve and enjoy',
            'step_6' => "Klungkung Lawar is traditionally served at room temperature or slightly chilled. Garnish with additional lemon basil leaves and torch ginger flower for added freshness and presentation. Enjoy the rich and complex flavors of Klungkung Lawar, a true culinary delight that represents the essence of Balinese cuisine.",
            'history' => "Klungkung Lawar is a traditional Balinese dish that originated from Klungkung, a regency in Bali, Indonesia. It has a long-standing history and is deeply rooted in the local culinary heritage. Lawar itself is a term used for a type of Balinese salad that typically consists of finely chopped or minced ingredients mixed with spices, grated coconut, and sometimes blood as a key ingredient. The history of Klungkung Lawar dates back generations, and it holds a significant cultural and social value in the region. It is often prepared and served during religious ceremonies, special occasions, and traditional Balinese rituals. The dish is known for its complex flavors, combining the richness of various ingredients such as meat, spices, coconut, and herbs. Klungkung Lawar showcases the creativity and culinary expertise of the local Balinese people, who have preserved the traditional recipe and cooking techniques throughout the years. It represents a harmonious blend of flavors, textures, and cultural heritage, making it an essential part of Balinese gastronomy and a true delight for food enthusiasts seeking an authentic taste of Klungkung.",
        ]);

        History::create([
            'menus_id' => '5',
            'title_1' => 'Mempersiapkan Babi Guling',
            'step_1' => 'Pilih babi guling muda yang segar, sebaiknya dengan berat sekitar 8-10 kilogram. Bersihkan babi secara menyeluruh, singkirkan bulu dan organ dalamnya. Skor kulit babi dalam pola berlian untuk membantu kulit menjadi garing saat dipanggang. Bumbui babi dengan campuran garam, merica, bawang putih, dan bumbu tradisional Bali seperti kunyit, ketumbar, dan jahe.',
            'title_2' => 'Mengisi Babi',
            'step_2' => 'Siapkan campuran isian dengan menggabungkan bawang merah cincang, bawang putih, jahe, serai, kunyit, lengkuas, dan bumbu dan rempah lain yang diinginkan. Isi rongga babi dengan campuran isian, pastikan untuk mendistribusikannya secara merata ke seluruh tubuh. Jahit bukaan babi menggunakan benang dapur untuk mengamankan isian di dalamnya.',
            'title_3' => 'Memanggang Babi',
            'step_3' => 'Panaskan oven atau lubang api dengan suhu tinggi, sekitar 180-200 derajat Celcius. Tempatkan boneka babi di atas rak pemanggang atau ludah, pastikan posisinya aman. Masak babi perlahan dan merata, olesi secara teratur dengan campuran minyak, air, dan bumbu tradisional Bali untuk menambah rasa. Panggang babi selama beberapa jam, hingga kulitnya berwarna cokelat keemasan dan renyah, serta dagingnya empuk dan matang.',
            'title_4' => 'Istirahat dan Ukiran',
            'step_4' => 'Setelah babi matang, keluarkan dari oven atau lubang api dan diamkan selama sekitar 30 menit. Ukir babi dengan hati-hati ke dalam porsi ukuran porsi, pastikan untuk memasukkan kulit yang renyah dan daging yang segar. Atur potongan ukiran di atas piring saji, hiasi dengan bumbu segar dan potongan jeruk nipis untuk sentuhan rasa ekstra.',
            'title_5' => 'Melayani dan Menikmati',
            'step_5' => 'Sajikan Babi Guling Klungkung sebagai hidangan utama untuk acara-acara khusus, perayaan, atau pesta tradisional Bali. Lengkapi dengan berbagai lauk pauk, seperti nasi kukus, sambal matah, urap (sayur campur dengan parutan kelapa), dan lawar (salad tradisional Bali). Ajak tamu Anda untuk menikmati kulit yang renyah, daging yang empuk, dan rasa yang kaya dari Babi Guling Klungkung, rasakan cita rasa otentik dari kelezatan Bali yang terkenal ini.',
            'history' => 'Babi Guling Klungkung, juga dikenal sebagai "Babi Guling Klungkung" dalam bahasa Indonesia, adalah hidangan tradisional Bali yang kaya akan sejarah dan budaya. Hidangan ini berasal dari tradisi kuliner kuno daerah Klungkung di Bali, Indonesia. Babi guling telah menjadi bagian integral dari upacara, ritual, dan perayaan orang Bali selama berabad-abad. Ini memegang tempat khusus dalam budaya Bali dan sering disajikan pada acara-acara penting seperti upacara pura, pernikahan, dan festival keagamaan. Asal usul Babi Guling Klungkung dapat ditelusuri kembali ke istana kerajaan Klungkung, di mana secara tradisional disiapkan sebagai simbol kekayaan, prestise, dan keramahan. Hidangan ini awalnya diperuntukkan bagi para bangsawan dan tamu terhormat, namun seiring berjalannya waktu, menjadi populer di kalangan masyarakat Bali yang lebih luas dan mendapat pengakuan sebagai hidangan khas daerah tersebut. Persiapan Babi Guling Klungkung adalah proses padat karya yang melibatkan pengasinan babi dengan campuran bumbu dan rempah aromatik, seperti kunyit, ketumbar, serai, dan jahe. Babi tersebut kemudian dipanggang perlahan di atas api terbuka atau dalam oven khusus hingga kulitnya menjadi renyah dan berwarna cokelat keemasan, sedangkan dagingnya tetap empuk dan segar.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '5',
            'language' => 'id',
            'menus_id' => '5',
            'title_1' => 'Mempersiapkan Babi Guling',
            'step_1' => 'Pilih babi guling muda yang segar, sebaiknya dengan berat sekitar 8-10 kilogram. Bersihkan babi secara menyeluruh, singkirkan bulu dan organ dalamnya. Skor kulit babi dalam pola berlian untuk membantu kulit menjadi garing saat dipanggang. Bumbui babi dengan campuran garam, merica, bawang putih, dan bumbu tradisional Bali seperti kunyit, ketumbar, dan jahe.',
            'title_2' => 'Mengisi Babi',
            'step_2' => 'Siapkan campuran isian dengan menggabungkan bawang merah cincang, bawang putih, jahe, serai, kunyit, lengkuas, dan bumbu dan rempah lain yang diinginkan. Isi rongga babi dengan campuran isian, pastikan untuk mendistribusikannya secara merata ke seluruh tubuh. Jahit bukaan babi menggunakan benang dapur untuk mengamankan isian di dalamnya.',
            'title_3' => 'Memanggang Babi',
            'step_3' => 'Panaskan oven atau lubang api dengan suhu tinggi, sekitar 180-200 derajat Celcius. Tempatkan boneka babi di atas rak pemanggang atau ludah, pastikan posisinya aman. Masak babi perlahan dan merata, olesi secara teratur dengan campuran minyak, air, dan bumbu tradisional Bali untuk menambah rasa. Panggang babi selama beberapa jam, hingga kulitnya berwarna cokelat keemasan dan renyah, serta dagingnya empuk dan matang.',
            'title_4' => 'Istirahat dan Ukiran',
            'step_4' => 'Setelah babi matang, keluarkan dari oven atau lubang api dan diamkan selama sekitar 30 menit. Ukir babi dengan hati-hati ke dalam porsi ukuran porsi, pastikan untuk memasukkan kulit yang renyah dan daging yang segar. Atur potongan ukiran di atas piring saji, hiasi dengan bumbu segar dan potongan jeruk nipis untuk sentuhan rasa ekstra.',
            'title_5' => 'Melayani dan Menikmati',
            'step_5' => 'Sajikan Babi Guling Klungkung sebagai hidangan utama untuk acara-acara khusus, perayaan, atau pesta tradisional Bali. Lengkapi dengan berbagai lauk pauk, seperti nasi kukus, sambal matah, urap (sayur campur dengan parutan kelapa), dan lawar (salad tradisional Bali). Ajak tamu Anda untuk menikmati kulit yang renyah, daging yang empuk, dan rasa yang kaya dari Babi Guling Klungkung, rasakan cita rasa otentik dari kelezatan Bali yang terkenal ini.',
            'history' => 'Babi Guling Klungkung, juga dikenal sebagai "Babi Guling Klungkung" dalam bahasa Indonesia, adalah hidangan tradisional Bali yang kaya akan sejarah dan budaya. Hidangan ini berasal dari tradisi kuliner kuno daerah Klungkung di Bali, Indonesia. Babi guling telah menjadi bagian integral dari upacara, ritual, dan perayaan orang Bali selama berabad-abad. Ini memegang tempat khusus dalam budaya Bali dan sering disajikan pada acara-acara penting seperti upacara pura, pernikahan, dan festival keagamaan. Asal usul Babi Guling Klungkung dapat ditelusuri kembali ke istana kerajaan Klungkung, di mana secara tradisional disiapkan sebagai simbol kekayaan, prestise, dan keramahan. Hidangan ini awalnya diperuntukkan bagi para bangsawan dan tamu terhormat, namun seiring berjalannya waktu, menjadi populer di kalangan masyarakat Bali yang lebih luas dan mendapat pengakuan sebagai hidangan khas daerah tersebut. Persiapan Babi Guling Klungkung adalah proses padat karya yang melibatkan pengasinan babi dengan campuran bumbu dan rempah aromatik, seperti kunyit, ketumbar, serai, dan jahe. Babi tersebut kemudian dipanggang perlahan di atas api terbuka atau dalam oven khusus hingga kulitnya menjadi renyah dan berwarna cokelat keemasan, sedangkan dagingnya tetap empuk dan segar.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '5',
            'language' => 'en',
            'menus_id' => '5',
            'title_1' => 'Preparing the Suckling Pig',
            'step_1' => 'Select a fresh, young suckling pig, preferably around 8-10 kilograms in weight. Thoroughly clean the pig, removing any hairs and internal organs. Score the skin of the pig in a diamond pattern to help the skin crisp up during roasting. Season the pig generously with a mixture of salt, pepper, garlic, and traditional Balinese spices such as turmeric, coriander, and ginger.',
            'title_2' => 'Stuffing the Pig',
            'step_2' => 'Prepare the stuffing mixture by combining chopped onions, garlic, ginger, lemongrass, turmeric, galangal, and other desired herbs and spices. Fill the cavity of the pig with the stuffing mixture, making sure to distribute it evenly throughout the body. Sew up the opening of the pig using kitchen twine to secure the stuffing inside.',
            'title_3' => 'Roasting the Pig',
            'step_3' => 'Preheat the oven or fire pit to a high temperature, around 180-200 degrees Celsius. Place the stuffed pig on a roasting rack or spit, ensuring it is securely positioned. Cook the pig slowly and evenly, basting it regularly with a mixture of oil, water, and traditional Balinese spices for added flavor. Roast the pig for several hours, until the skin is golden brown and crispy, and the meat is tender and cooked through.',
            'title_4' => 'Resting and Carving',
            'step_4' => 'Once the pig is cooked, remove it from the oven or fire pit and let it rest for about 30 minutes. Carefully carve the pig into serving-sized portions, making sure to include both the crispy skin and succulent meat. Arrange the carved pieces on a serving platter, garnishing with fresh herbs and lime wedges for an extra touch of flavor.',
            'title_5' => 'Serving and Enjoying',
            'step_5' => 'Serve the Klungkung Suckling Pig as a centerpiece dish for special occasions, celebrations, or traditional Balinese feasts. Accompany it with a variety of side dishes, such as steamed rice, sambal matah (Balinese chili condiment), urap (mixed vegetables with grated coconut), and lawar (traditional Balinese salad). Encourage your guests to savor the crispy skin, tender meat, and rich flavors of the Klungkung Suckling Pig, experiencing the authentic taste of this renowned Balinese delicacy.',
            'history' => 'Klungkung Suckling Pig, also known as "Babi Guling Klungkung" in Indonesian, is a traditional Balinese dish with a rich history and cultural significance. The dish traces its roots back to the ancient culinary traditions of the Klungkung region in Bali, Indonesia. Suckling pig has been an integral part of Balinese ceremonies, rituals, and festive celebrations for centuries. It holds a special place in Balinese culture and is often served during important occasions such as temple ceremonies, weddings, and religious festivals. The origins of Klungkung Suckling Pig can be traced back to the royal court of Klungkung, where it was traditionally prepared as a symbol of wealth, prestige, and hospitality. The dish was initially reserved for the nobility and esteemed guests, but over time, it became popular among the wider Balinese community and gained recognition as a signature dish of the region. The preparation of Klungkung Suckling Pig is a labor-intensive process that involves marinating the pig with a blend of aromatic herbs and spices, such as turmeric, coriander, lemongrass, and ginger. The pig is then slowly roasted over an open fire or in a special oven until the skin turns crispy and golden brown, while the meat remains tender and succulent.',
        ]);

        History::create([
            'menus_id' => '6',
            'title_1' => 'Siapkan adonan',
            'step_1' => 'Dalam mangkuk pengaduk, campurkan tepung beras, santan, air, garam, dan sari pandan. Aduk rata sampai adonan halus dan bebas gumpalan. Konsistensi harus agak kental tetapi bisa dituang.',
            'title_2' => 'Panaskan wajan',
            'step_2' => 'Tempatkan wajan bundar atau panci laklak khusus di atas api sedang. Olesi sedikit dengan minyak atau gunakan semprotan masak anti lengket untuk mencegah laklak menempel.',
            'title_3' => 'Tuang adonan',
            'step_3' => 'Menggunakan sendok atau cangkir kecil, tuangkan sedikit adonan ke wajan, buat pancake berbentuk bulat. Ukuran laklak biasanya berdiameter sekitar 5-6 sentimeter.',
            'title_4' => 'Masak laklak',
            'step_4' => 'Biarkan laklak matang selama beberapa menit hingga sisi bawah berwarna cokelat keemasan dan sisi atas mulai mengeras. Anda akan melihat lubang-lubang kecil terbentuk di permukaan.',
            'title_5' => 'Balik dan masak sisi lainnya',
            'step_5' => 'Balik laklak dengan lembut menggunakan spatula untuk memasak sisi lainnya. Masak selama satu menit atau lebih sampai berwarna kecokelatan dan matang.',
            'title_6' => 'Ulangi prosesnya',
            'step_6' => "Lanjutkan menuang adonan dan masak laklak secara bertahap sampai semua adonan habis. Anda bisa menumpuk laklak yang sudah matang di atas piring, pisahkan setiap lapisan dengan daun pisang atau kertas perkamen agar tidak lengket.",
            'history' => 'Klungkung Laklak adalah makanan penutup tradisional Bali yang kaya akan sejarah sejak berabad-abad yang lalu. Laklak berasal dari Kerajaan Klungkung di Bali yang sering disiapkan untuk acara-acara khusus dan upacara keagamaan. Nama "Laklak" berasal dari bahasa Bali "Lakar" yang berarti bentuk bulat kecil. Laklak Klungkung diyakini awalnya diciptakan sebagai persembahan kepada para dewa selama ritual candi. Seiring waktu, itu menjadi populer di kalangan penduduk setempat dan berubah menjadi suguhan manis favorit. Resep Laklak Klungkung sudah turun temurun dengan sedikit variasi bahan dan teknik. Secara tradisional, pembuatannya menggunakan tepung beras, santan, air, garam, dan sari pandan. Adonan dituangkan ke atas wajan bundar atau wajan khusus laklak dan dimasak hingga berwarna cokelat keemasan. Klungkung Laklak biasanya disajikan dengan kelapa parut dan sirup gula aren, menambah rasa manis dan rasa pada hidangan. Perpaduan laklak yang lembut dan sedikit kenyal dengan kelapa yang harum dan sirup manis menciptakan pengalaman rasa yang nikmat.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '6',
            'language' => 'id',
            'menus_id' => '6',
            'title_1' => 'Siapkan adonan',
            'step_1' => 'Dalam mangkuk pengaduk, campurkan tepung beras, santan, air, garam, dan sari pandan. Aduk rata sampai adonan halus dan bebas gumpalan. Konsistensi harus agak kental tetapi bisa dituang.',
            'title_2' => 'Panaskan wajan',
            'step_2' => 'Tempatkan wajan bundar atau panci laklak khusus di atas api sedang. Olesi sedikit dengan minyak atau gunakan semprotan masak anti lengket untuk mencegah laklak menempel.',
            'title_3' => 'Tuang adonan',
            'step_3' => 'Menggunakan sendok atau cangkir kecil, tuangkan sedikit adonan ke wajan, buat pancake berbentuk bulat. Ukuran laklak biasanya berdiameter sekitar 5-6 sentimeter.',
            'title_4' => 'Masak laklak',
            'step_4' => 'Biarkan laklak matang selama beberapa menit hingga sisi bawah berwarna cokelat keemasan dan sisi atas mulai mengeras. Anda akan melihat lubang-lubang kecil terbentuk di permukaan.',
            'title_5' => 'Balik dan masak sisi lainnya',
            'step_5' => 'Balik laklak dengan lembut menggunakan spatula untuk memasak sisi lainnya. Masak selama satu menit atau lebih sampai berwarna kecokelatan dan matang.',
            'title_6' => 'Ulangi prosesnya',
            'step_6' => "Lanjutkan menuang adonan dan masak laklak secara bertahap sampai semua adonan habis. Anda bisa menumpuk laklak yang sudah matang di atas piring, pisahkan setiap lapisan dengan daun pisang atau kertas perkamen agar tidak lengket.",
            'history' => 'Klungkung Laklak adalah makanan penutup tradisional Bali yang kaya akan sejarah sejak berabad-abad yang lalu. Laklak berasal dari Kerajaan Klungkung di Bali yang sering disiapkan untuk acara-acara khusus dan upacara keagamaan. Nama "Laklak" berasal dari bahasa Bali "Lakar" yang berarti bentuk bulat kecil. Laklak Klungkung diyakini awalnya diciptakan sebagai persembahan kepada para dewa selama ritual candi. Seiring waktu, itu menjadi populer di kalangan penduduk setempat dan berubah menjadi suguhan manis favorit. Resep Laklak Klungkung sudah turun temurun dengan sedikit variasi bahan dan teknik. Secara tradisional, pembuatannya menggunakan tepung beras, santan, air, garam, dan sari pandan. Adonan dituangkan ke atas wajan bundar atau wajan khusus laklak dan dimasak hingga berwarna cokelat keemasan. Klungkung Laklak biasanya disajikan dengan kelapa parut dan sirup gula aren, menambah rasa manis dan rasa pada hidangan. Perpaduan laklak yang lembut dan sedikit kenyal dengan kelapa yang harum dan sirup manis menciptakan pengalaman rasa yang nikmat.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '6',
            'language' => 'en',
            'menus_id' => '6',
            'title_1' => 'Prepare the batter',
            'step_1' => 'In a mixing bowl, combine rice flour, coconut milk, water, salt, and pandan essence. Mix well until the batter is smooth and lump-free. The consistency should be slightly thick but pourable.',
            'title_2' => 'Heat the skillet',
            'step_2' => 'Place a round skillet or a special laklak pan over medium heat. Brush it lightly with oil or use a non-stick cooking spray to prevent the laklak from sticking.',
            'title_3' => 'Pour the batter',
            'step_3' => 'Using a ladle or a small cup, pour a small amount of the batter onto the skillet, creating round-shaped pancakes. The size of the laklak is usually about 5-6 centimeters in diameter.',
            'title_4' => 'Cook the laklak',
            'step_4' => 'Allow the laklak to cook for a few minutes until the bottom side is golden brown and the top side starts to set. You will notice small holes forming on the surface.',
            'title_5' => 'Flip and cook the other side',
            'step_5' => 'Gently flip the laklak using a spatula to cook the other side. Cook for another minute or so until it becomes lightly browned and cooked through.',
            'title_6' => 'Repeat the process',
            'step_6' => "Continue pouring the batter and cooking the laklak in batches until all the batter is used up. You can stack the cooked laklak on a plate, separating each layer with banana leaves or parchment paper to prevent sticking.",
            'history' => 'Klungkung Laklak is a traditional Balinese dessert that has a rich history dating back centuries. The origins of Laklak can be traced to the Klungkung Kingdom in Bali, where it was often prepared for special occasions and religious ceremonies. The name "Laklak" is derived from the Balinese word "Lakar," which means small round shape. It is believed that Klungkung Laklak was initially created as an offering to the gods during temple rituals. Over time, it became popular among the local population and turned into a beloved sweet treat. The recipe for Klungkung Laklak has been passed down through generations, with slight variations in ingredients and techniques. Traditionally, it is made using rice flour, coconut milk, water, salt, and pandan essence. The batter is poured onto a round skillet or a special laklak pan and cooked until golden brown. Klungkung Laklak is typically served with grated coconut and a drizzle of palm sugar syrup, adding sweetness and flavor to the dish. The combination of soft and slightly chewy laklak with the fragrant coconut and sweet syrup creates a delightful taste experience.',
        ]);

        History::create([
            'menus_id' => '7',
            'title_1' => 'Siapkan ikan',
            'step_1' => 'Mulailah dengan memilih ikan utuh segar, seperti kakap atau kerapu, dan bersihkan hingga bersih. Buat potongan diagonal yang dangkal di kedua sisi ikan untuk memungkinkan penetrasi bumbu yang lebih baik.',
            'title_2' => 'Rendam ikan',
            'step_2' => 'Dalam mangkuk, campurkan bahan-bahan untuk rendaman, yang mungkin termasuk bubuk kunyit, bawang putih, bawang merah, serai, jahe, garam, dan merica. Gosokkan rendaman ke seluruh ikan, pastikan bumbunya melapisi kedua sisi dan bagian dalam rongga. Biarkan ikan diasinkan setidaknya selama 30 menit agar bumbu meresap.',
            'title_3' => 'Siapkan panggangan',
            'step_3' => 'Panaskan pemanggang arang atau gas dengan api sedang-tinggi. Jika menggunakan panggangan arang, tunggu hingga bara panas dan tertutup lapisan abu putih.',
            'title_4' => 'Panggang ikan',
            'step_4' => 'Tempatkan ikan yang diasinkan langsung di atas panggangan. Masak ikan selama sekitar 4-6 menit per sisi, tergantung ketebalannya, sampai dagingnya buram dan mudah terkelupas dengan garpu. Balik ikan dengan hati-hati agar tidak lengket atau pecah.',
            'title_5' => 'Sajikan ikan bakar',
            'step_5' => 'Setelah ikan matang, pindahkan dengan hati-hati ke piring saji. Hiasi ikan dengan bumbu segar, seperti daun ketumbar atau kemangi, dan perasan air jeruk nipis untuk menambah kesegaran. Sajikan Ikan Bakar Klungkung panas-panas, ditemani nasi putih dan lauk pauk pilihan Anda, seperti sambal matah atau sayur bakar.',
            'history' => 'Ikan Bakar Klungkung, juga dikenal sebagai "Ikan Bakar Klungkung" dalam bahasa Indonesia, adalah hidangan tradisional dari Klungkung, Bali. Ini adalah hidangan makanan laut populer yang menampilkan cita rasa masakan Bali yang kaya. Sejarah Ikan Bakar Klungkung dapat ditelusuri kembali ke komunitas nelayan di Klungkung, di mana ikan segar mudah didapat. Penduduk setempat telah menyempurnakan seni memanggang ikan di atas api terbuka, menciptakan hidangan yang beraroma dan harum. Cara memanggang Ikan Bakar Klungkung adalah dengan merendam ikan dalam campuran bumbu dan rempah-rempah, antara lain kunyit, bawang putih, bawang merah, serai, dan jahe. Ikan tersebut kemudian dipanggang di atas arang atau api terbuka, menghasilkan bagian luar yang berasap dan hangus dengan daging yang empuk dan berair. Hidangan ini telah menjadi makanan pokok di lanskap kuliner Klungkung dan sering dinikmati oleh penduduk lokal maupun pengunjung. Perpaduan ikan segar, rempah-rempah yang harum, dan teknik memanggang yang unik menciptakan pengalaman indrawi yang menyenangkan yang mencerminkan warisan budaya Klungkung yang kaya.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '7',
            'language' => 'id',
            'menus_id' => '7',
            'title_1' => 'Siapkan ikan',
            'step_1' => 'Mulailah dengan memilih ikan utuh segar, seperti kakap atau kerapu, dan bersihkan hingga bersih. Buat potongan diagonal yang dangkal di kedua sisi ikan untuk memungkinkan penetrasi bumbu yang lebih baik.',
            'title_2' => 'Rendam ikan',
            'step_2' => 'Dalam mangkuk, campurkan bahan-bahan untuk rendaman, yang mungkin termasuk bubuk kunyit, bawang putih, bawang merah, serai, jahe, garam, dan merica. Gosokkan rendaman ke seluruh ikan, pastikan bumbunya melapisi kedua sisi dan bagian dalam rongga. Biarkan ikan diasinkan setidaknya selama 30 menit agar bumbu meresap.',
            'title_3' => 'Siapkan panggangan',
            'step_3' => 'Panaskan pemanggang arang atau gas dengan api sedang-tinggi. Jika menggunakan panggangan arang, tunggu hingga bara panas dan tertutup lapisan abu putih.',
            'title_4' => 'Panggang ikan',
            'step_4' => 'Tempatkan ikan yang diasinkan langsung di atas panggangan. Masak ikan selama sekitar 4-6 menit per sisi, tergantung ketebalannya, sampai dagingnya buram dan mudah terkelupas dengan garpu. Balik ikan dengan hati-hati agar tidak lengket atau pecah.',
            'title_5' => 'Sajikan ikan bakar',
            'step_5' => 'Setelah ikan matang, pindahkan dengan hati-hati ke piring saji. Hiasi ikan dengan bumbu segar, seperti daun ketumbar atau kemangi, dan perasan air jeruk nipis untuk menambah kesegaran. Sajikan Ikan Bakar Klungkung panas-panas, ditemani nasi putih dan lauk pauk pilihan Anda, seperti sambal matah atau sayur bakar.',
            'history' => 'Ikan Bakar Klungkung, juga dikenal sebagai "Ikan Bakar Klungkung" dalam bahasa Indonesia, adalah hidangan tradisional dari Klungkung, Bali. Ini adalah hidangan makanan laut populer yang menampilkan cita rasa masakan Bali yang kaya. Sejarah Ikan Bakar Klungkung dapat ditelusuri kembali ke komunitas nelayan di Klungkung, di mana ikan segar mudah didapat. Penduduk setempat telah menyempurnakan seni memanggang ikan di atas api terbuka, menciptakan hidangan yang beraroma dan harum. Cara memanggang Ikan Bakar Klungkung adalah dengan merendam ikan dalam campuran bumbu dan rempah-rempah, antara lain kunyit, bawang putih, bawang merah, serai, dan jahe. Ikan tersebut kemudian dipanggang di atas arang atau api terbuka, menghasilkan bagian luar yang berasap dan hangus dengan daging yang empuk dan berair. Hidangan ini telah menjadi makanan pokok di lanskap kuliner Klungkung dan sering dinikmati oleh penduduk lokal maupun pengunjung. Perpaduan ikan segar, rempah-rempah yang harum, dan teknik memanggang yang unik menciptakan pengalaman indrawi yang menyenangkan yang mencerminkan warisan budaya Klungkung yang kaya.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '7',
            'language' => 'en',
            'menus_id' => '7',
            'title_1' => 'Prepare the fish',
            'step_1' => 'Start by selecting a fresh whole fish, such as snapper or grouper, and clean it thoroughly. Make shallow diagonal cuts on both sides of the fish to allow for better seasoning penetration.',
            'title_2' => 'Marinate the fish',
            'step_2' => 'In a bowl, combine ingredients for the marinade, which may include turmeric powder, garlic, shallots, lemongrass, ginger, salt, and pepper. Rub the marinade all over the fish, ensuring it coats both sides and the inside cavity. Let the fish marinate for at least 30 minutes to allow the flavors to infuse.',
            'title_3' => 'Prepare the grill',
            'step_3' => 'Preheat a charcoal or gas grill to medium-high heat. If using a charcoal grill, wait until the coals are hot and covered with a layer of white ash.',
            'title_4' => 'Grill the fish',
            'step_4' => 'Place the marinated fish directly on the grill grates. Cook the fish for about 4-6 minutes per side, depending on the thickness, until the flesh is opaque and flakes easily with a fork. Flip the fish carefully to avoid sticking or breaking.',
            'title_5' => 'Serve the grilled fish',
            'step_5' => 'Once the fish is cooked, carefully transfer it to a serving platter. Garnish the fish with fresh herbs, such as cilantro or basil, and a squeeze of lime juice for added freshness. Serve the Klungkung Grilled Fish hot, accompanied by steamed rice and your choice of side dishes, such as sambal matah or grilled vegetables.',
            'history' => 'Klungkung Grilled Fish, also known as "Ikan Bakar Klungkung" in Indonesian, is a traditional dish from Klungkung, Bali. It is a popular seafood dish that showcases the rich flavors of Balinese cuisine. The history of Klungkung Grilled Fish can be traced back to the fishing communities in Klungkung, where fresh fish is readily available. The locals have perfected the art of grilling fish over open flames, creating a dish that is both flavorful and aromatic. The grilling method used for Klungkung Grilled Fish involves marinating the fish in a blend of herbs and spices, which may include turmeric, garlic, shallots, lemongrass, and ginger. The fish is then grilled over charcoal or an open fire, resulting in a smoky and charred exterior with tender and juicy flesh. This dish has become a staple in the culinary landscape of Klungkung and is often enjoyed by locals and visitors alike. The combination of fresh fish, aromatic spices, and the unique grilling technique creates a delightful sensory experience that reflects the rich cultural heritage of Klungkung.',
        ]);

        History::create([
            'menus_id' => '8',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Kumpulkan bahan-bahan yang diperlukan, biasanya berupa tepung beras ketan, gula aren, kelapa parut, daun pandan, dan garam. Bahan-bahan inilah yang menjadi bahan dasar Penganan Tradisional Klungkung.',
            'title_2' => 'Masak isinya',
            'step_2' => 'Mulailah dengan membuat isian manis untuk manisan. Dalam panci, campurkan gula aren, kelapa parut, dan sedikit garam. Masak adonan dengan api kecil sambil terus diaduk hingga gula aren meleleh dan kelapa menjadi harum dan sedikit karamel. Sisihkan isian hingga dingin.',
            'title_3' => 'Buat adonan',
            'step_3' => 'Dalam mangkuk pengaduk, campurkan tepung beras ketan, sedikit garam, dan jus pandan (diekstrak dari daun pandan). Uleni campuran tersebut hingga membentuk adonan yang halus dan lentur. Jika perlu, tambahkan sedikit air atau lebih banyak tepung untuk mencapai kekentalan yang tepat.',
            'title_4' => 'Bentuk manisan',
            'step_4' => 'Ambil sedikit adonan lalu pipihkan dengan telapak tangan. Tempatkan sedikit isian manis di tengah adonan. Lipat tepi adonan di atas isian, rekatkan hingga membentuk kantong kecil atau bentuk bola. Ulangi proses ini sampai semua adonan dan isian habis.',
            'title_5' => 'Kukus permennya',
            'step_5' => 'Susun manisan berbentuk di atas nampan pengukus yang dialasi daun pisang atau kertas perkamen. Kukus permen di atas api sedang selama sekitar 15-20 menit, atau sampai adonan menjadi bening dan matang.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah Manisan Tradisional Klungkung dikukus dan matang, keluarkan dari kukusan dan biarkan agak dingin. Sajikan sebagai suguhan manis yang menyenangkan, baik sebagai camilan atau sebagai makanan penutup tradisional. Nikmati kombinasi adonan yang lembut dan kenyal dengan isian yang manis dan beraroma.",
            'history' => 'Kue Tradisional Klungkung, juga dikenal sebagai "Jajan Klungkung" dalam bahasa Indonesia, memiliki sejarah yang kaya berakar dalam warisan kuliner Klungkung, Bali. Penganan tradisional ini telah dinikmati secara turun-temurun dan terus dilestarikan sebagai bagian dari budaya lokal. Sejarah Penganan Tradisional Klungkung dapat ditelusuri kembali ke zaman kuno ketika wilayah ini dikenal dengan praktik pertaniannya yang subur. Penggunaan bahan-bahan lokal seperti tepung ketan, gula aren, dan parutan kelapa mencerminkan melimpahnya sumber daya tersebut di daerah tersebut. Pembuatan Permen Tradisional Klungkung melibatkan teknik tradisional yang telah diwariskan secara turun-temurun. Pemilihan dan kombinasi bahan-bahan yang cermat, bersama dengan proses pembentukan dan pengukusan yang rumit, menunjukkan keahlian dan keahlian para pengrajin lokal. Permen ini memiliki arti penting dalam berbagai upacara budaya dan agama di Klungkung, seperti festival candi, pernikahan, dan acara penting lainnya. Mereka sering dipersembahkan sebagai bentuk rasa terima kasih dan pengabdian kepada para dewa, melambangkan berkah, kelimpahan, dan harmoni. Penganan Tradisional Klungkung tidak hanya suguhan yang lezat tetapi juga simbol identitas budaya dan warisan Klungkung. Mereka mewujudkan esensi tradisi Bali, yang mencerminkan hubungan mendalam antara makanan, spiritualitas, dan komunitas di wilayah tersebut.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '8',
            'language' => 'id',
            'menus_id' => '8',
            'title_1' => 'Siapkan bahan-bahannya',
            'step_1' => 'Kumpulkan bahan-bahan yang diperlukan, biasanya berupa tepung beras ketan, gula aren, kelapa parut, daun pandan, dan garam. Bahan-bahan inilah yang menjadi bahan dasar Penganan Tradisional Klungkung.',
            'title_2' => 'Masak isinya',
            'step_2' => 'Mulailah dengan membuat isian manis untuk manisan. Dalam panci, campurkan gula aren, kelapa parut, dan sedikit garam. Masak adonan dengan api kecil sambil terus diaduk hingga gula aren meleleh dan kelapa menjadi harum dan sedikit karamel. Sisihkan isian hingga dingin.',
            'title_3' => 'Buat adonan',
            'step_3' => 'Dalam mangkuk pengaduk, campurkan tepung beras ketan, sedikit garam, dan jus pandan (diekstrak dari daun pandan). Uleni campuran tersebut hingga membentuk adonan yang halus dan lentur. Jika perlu, tambahkan sedikit air atau lebih banyak tepung untuk mencapai kekentalan yang tepat.',
            'title_4' => 'Bentuk manisan',
            'step_4' => 'Ambil sedikit adonan lalu pipihkan dengan telapak tangan. Tempatkan sedikit isian manis di tengah adonan. Lipat tepi adonan di atas isian, rekatkan hingga membentuk kantong kecil atau bentuk bola. Ulangi proses ini sampai semua adonan dan isian habis.',
            'title_5' => 'Kukus permennya',
            'step_5' => 'Susun manisan berbentuk di atas nampan pengukus yang dialasi daun pisang atau kertas perkamen. Kukus permen di atas api sedang selama sekitar 15-20 menit, atau sampai adonan menjadi bening dan matang.',
            'title_6' => 'Sajikan dan nikmati',
            'step_6' => "Setelah Manisan Tradisional Klungkung dikukus dan matang, keluarkan dari kukusan dan biarkan agak dingin. Sajikan sebagai suguhan manis yang menyenangkan, baik sebagai camilan atau sebagai makanan penutup tradisional. Nikmati kombinasi adonan yang lembut dan kenyal dengan isian yang manis dan beraroma.",
            'history' => 'Kue Tradisional Klungkung, juga dikenal sebagai "Jajan Klungkung" dalam bahasa Indonesia, memiliki sejarah yang kaya berakar dalam warisan kuliner Klungkung, Bali. Penganan tradisional ini telah dinikmati secara turun-temurun dan terus dilestarikan sebagai bagian dari budaya lokal. Sejarah Penganan Tradisional Klungkung dapat ditelusuri kembali ke zaman kuno ketika wilayah ini dikenal dengan praktik pertaniannya yang subur. Penggunaan bahan-bahan lokal seperti tepung ketan, gula aren, dan parutan kelapa mencerminkan melimpahnya sumber daya tersebut di daerah tersebut. Pembuatan Permen Tradisional Klungkung melibatkan teknik tradisional yang telah diwariskan secara turun-temurun. Pemilihan dan kombinasi bahan-bahan yang cermat, bersama dengan proses pembentukan dan pengukusan yang rumit, menunjukkan keahlian dan keahlian para pengrajin lokal. Permen ini memiliki arti penting dalam berbagai upacara budaya dan agama di Klungkung, seperti festival candi, pernikahan, dan acara penting lainnya. Mereka sering dipersembahkan sebagai bentuk rasa terima kasih dan pengabdian kepada para dewa, melambangkan berkah, kelimpahan, dan harmoni. Penganan Tradisional Klungkung tidak hanya suguhan yang lezat tetapi juga simbol identitas budaya dan warisan Klungkung. Mereka mewujudkan esensi tradisi Bali, yang mencerminkan hubungan mendalam antara makanan, spiritualitas, dan komunitas di wilayah tersebut.',
        ]);

        HistoriesTranslation::create([
            'histories_id' => '8',
            'language' => 'en',
            'menus_id' => '8',
            'title_1' => 'Prepare the ingredients',
            'step_1' => 'Gather the necessary ingredients, which typically include glutinous rice flour, palm sugar, grated coconut, pandan leaves, and salt. These ingredients form the base of Klungkung Traditional Sweets.',
            'title_2' => 'Cook the filling',
            'step_2' => 'Start by making the sweet filling for the sweets. In a pan, combine palm sugar, grated coconut, and a pinch of salt. Cook the mixture over low heat, stirring continuously until the palm sugar has melted and the coconut becomes fragrant and slightly caramelized. Set the filling aside to cool.',
            'title_3' => 'Make the dough',
            'step_3' => 'In a mixing bowl, combine glutinous rice flour, a bit of salt, and pandan juice (extracted from pandan leaves). Knead the mixture until it forms a smooth and pliable dough. If needed, add a little water or more flour to achieve the right consistency.',
            'title_4' => 'Shape the sweets',
            'step_4' => 'Take a small portion of the dough and flatten it with your palm. Place a small amount of the sweet filling in the center of the dough. Fold the edges of the dough over the filling, sealing it to form a small pouch or ball shape. Repeat this process until all the dough and filling are used.',
            'title_5' => 'Steam the sweets',
            'step_5' => 'Arrange the shaped sweets on a steamer tray lined with banana leaves or parchment paper. Steam the sweets over medium heat for about 15-20 minutes, or until the dough becomes translucent and cooked through.',
            'title_6' => 'Serve and enjoy',
            'step_6' => "Once the Klungkung Traditional Sweets are steamed and cooked, remove them from the steamer and let them cool slightly. Serve them as a delightful sweet treat, either as a snack or as a traditional dessert. Enjoy the combination of the soft and chewy dough with the sweet and flavorful filling.",
            'history' => 'Klungkung Traditional Sweets, also known as "Jajan Klungkung" in Indonesian, have a rich history deeply rooted in the culinary heritage of Klungkung, Bali. These traditional sweets have been enjoyed by generations and continue to be cherished as a part of the local culture. The history of Klungkung Traditional Sweets can be traced back to the ancient times when the region was known for its flourishing agricultural practices. The use of local ingredients such as glutinous rice flour, palm sugar, and grated coconut reflects the abundance of these resources in the area. The preparation of Klungkung Traditional Sweets involves traditional techniques that have been passed down through generations. The careful selection and combination of ingredients, along with the intricate shaping and steaming process, showcase the skill and craftsmanship of the local artisans. These sweets hold significance in various cultural and religious ceremonies in Klungkung, such as temple festivals, weddings, and other important occasions. They are often offered as a form of gratitude and devotion to the deities, symbolizing blessings, abundance, and harmony. Klungkung Traditional Sweets are not only a delicious treat but also a symbol of the cultural identity and heritage of Klungkung. They embody the essence of Balinese traditions, reflecting the deep connection between food, spirituality, and community in the region.',
        ]);

        Feedback::create([
            'name' => 'TastyTaster99',
            'email' => 'tastytaster99@example.com',
            'message' => 'Makanan di Delicious Klungkung benar-benar luar biasa! Dari rasa yang kaya hingga penyajian yang indah, setiap gigitan adalah kenikmatan kuliner. Sangat dianjurkan!',
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '1',
            'language' => 'id',
            'name' => 'TastyTaster99',
            'email' => 'tastytaster99@example.com',
            'message' => 'Makanan di Delicious Klungkung benar-benar luar biasa! Dari rasa yang kaya hingga penyajian yang indah, setiap gigitan adalah kenikmatan kuliner. Sangat dianjurkan!',
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '1',
            'language' => 'en',
            'name' => 'TastyTaster99',
            'email' => 'tastytaster99@example.com',
            'message' => 'The food at Delicious Klungkung is absolutely amazing! From the rich flavors to the beautiful presentation, every bite is a culinary delight. Highly recommended!',
        ]);

        Feedback::create([
            'name' => 'FoodLover21',
            'email' => 'foodlover21@example.com',
            'message' => "Saya tidak bisa mendapatkan cukup makanan lezat di Delicious Klungkung! Setiap hidangan adalah semburan rasa yang benar-benar menangkap esensi warisan kuliner Klungkung. Teruslah berkarya!",
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '2',
            'language' => 'id',
            'name' => 'FoodLover21',
            'email' => 'foodlover21@example.com',
            'message' => "Saya tidak bisa mendapatkan cukup makanan lezat di Delicious Klungkung! Setiap hidangan adalah semburan rasa yang benar-benar menangkap esensi warisan kuliner Klungkung. Teruslah berkarya!",
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '2',
            'language' => 'en',
            'name' => 'FoodLover21',
            'email' => 'foodlover21@example.com',
            'message' => "Saya tidak bisa mendapatkan cukup makanan lezat di Delicious Klungkung! Setiap hidangan adalah semburan rasa yang benar-benar menangkap esensi warisan kuliner Klungkung. Teruslah berkarya!",
        ]);

        Feedback::create([
            'name' => 'TasteExplorer',
            'email' => 'tasteexplorer@email.com',
            'message' => 'Saya senang makan di Delicious Klungkung dan itu adalah pengalaman yang tak terlupakan. Perhatian terhadap detail di setiap hidangan dan layanan sempurna menjadikannya perjalanan kuliner yang tak terlupakan. Sangat direkomendasikan untuk penggemar makanan!',
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '3',
            'language' => 'id',
            'name' => 'TasteExplorer',
            'email' => 'tasteexplorer@email.com',
            'message' => 'Saya senang makan di Delicious Klungkung dan itu adalah pengalaman yang tak terlupakan. Perhatian terhadap detail di setiap hidangan dan layanan sempurna menjadikannya perjalanan kuliner yang tak terlupakan. Sangat direkomendasikan untuk penggemar makanan!',
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '3',
            'language' => 'en',
            'name' => 'TasteExplorer',
            'email' => 'tasteexplorer@email.com',
            'message' => 'I had the pleasure of dining at Delicious Klungkung and it was an unforgettable experience. The attention to detail in each dish and the impeccable service made it a memorable culinary journey. Highly recommended for food enthusiasts!',
        ]);

        Feedback::create([
            'name' => 'CulinaryAdventurer',
            'email' => 'culinaryadventurer@example.com',
            'message' => "Klungkung yang lezat adalah permata tersembunyi bagi pecinta makanan! Variasi rasa dan tekstur dalam hidangan mereka benar-benar luar biasa. Ini adalah tujuan yang harus dikunjungi bagi siapa saja yang mencari pengalaman kuliner otentik dan menyenangkan di Klungkung.",
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '4',
            'language' => 'id',
            'name' => 'CulinaryAdventurer',
            'email' => 'culinaryadventurer@example.com',
            'message' => "Klungkung yang lezat adalah permata tersembunyi bagi pecinta makanan! Variasi rasa dan tekstur dalam hidangan mereka benar-benar luar biasa. Ini adalah tujuan yang harus dikunjungi bagi siapa saja yang mencari pengalaman kuliner otentik dan menyenangkan di Klungkung.",
        ]);

        FeedbackTranslation::create([
            'feedback_id' => '4',
            'language' => 'en',
            'name' => 'CulinaryAdventurer',
            'email' => 'culinaryadventurer@example.com',
            'message' => "Delicious Klungkung is a hidden gem for food lovers! The variety of flavors and textures in their dishes is truly remarkable. It's a must-visit destination for anyone seeking an authentic and delightful culinary experience in Klungkung.",
        ]);

        Chef::create([
            'name' => 'I Wayan Suweca',
            'image' => 'chef-images/chef-1.jpg',
            'cooked_menu' => '1,2,3,4,5,6,7',
            'locations_id' => '1',
            'description' => "Chef I Wayan Suweca adalah chef berbakat yang berspesialisasi dalam masakan tradisional Klungkung. Dengan pengalaman bertahun-tahun di dapur, Chef Suweca telah mengembangkan keahliannya dalam memadukan cita rasa rempah Klungkung yang unik untuk menciptakan hidangan yang lezat dan otentik. Dia memiliki hasrat yang mendalam untuk melestarikan warisan kuliner Klungkung dan memperkenalkannya kepada dunia, memungkinkan orang untuk merasakan cita rasa khas daerah tersebut.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '1',
            'language' => 'id',
            'name' => 'I Wayan Suweca',
            'image' => 'chef-images/chef-1.jpg',
            'cooked_menu' => '1,2,3,4,5,6,7',
            'locations_id' => '1',
            'description' => "Chef I Wayan Suweca adalah chef berbakat yang berspesialisasi dalam masakan tradisional Klungkung. Dengan pengalaman bertahun-tahun di dapur, Chef Suweca telah mengembangkan keahliannya dalam memadukan cita rasa rempah Klungkung yang unik untuk menciptakan hidangan yang lezat dan otentik. Dia memiliki hasrat yang mendalam untuk melestarikan warisan kuliner Klungkung dan memperkenalkannya kepada dunia, memungkinkan orang untuk merasakan cita rasa khas daerah tersebut.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '1',
            'language' => 'en',
            'name' => 'I Wayan Suweca',
            'image' => 'chef-images/chef-1.jpg',
            'cooked_menu' => '1,2,3,4,5,6,7',
            'locations_id' => '1',
            'description' => "Chef I Wayan Suweca is a talented chef specializing in traditional Klungkung cuisine. With years of experience in the kitchen, Chef Suweca has developed expertise in blending the unique flavors of Klungkung's spices to create delicious and authentic dishes. He has a deep passion for preserving Klungkung's culinary heritage and introducing it to the world, allowing people to experience the distinct flavors of the region.",
        ]);

        Chef::create([
            'name' => 'Nyoman Ayu Wirastuti',
            'image' => 'chef-images/chef-2.jpg',
            'cooked_menu' => '2,3,4,7,8',
            'locations_id' => '2',
            'description' => "Chef Nyoman Ayu Wirastuti adalah chef terampil yang telah mendedikasikan dirinya untuk mempromosikan masakan Klungkung. Dengan dedikasi yang tinggi, Chef Ayu mempelajari dan mengasah kemampuannya dalam memasak masakan tradisional Klungkung. Melalui kreativitasnya, ia menghadirkan sentuhan modern pada resep klasik, menghasilkan kombinasi yang unik dan memikat. Dengan menjual masakan Klungkung, Chef Dewi berharap dapat memperkenalkan kekayaan budaya dan cita rasa khas daerahnya kepada khalayak yang lebih luas.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '2',
            'language' => 'id',
            'name' => 'Nyoman Ayu Wirastuti',
            'image' => 'chef-images/chef-2.jpg',
            'cooked_menu' => '2,3,4,7,8',
            'locations_id' => '2',
            'description' => "Chef Nyoman Ayu Wirastuti adalah chef terampil yang telah mendedikasikan dirinya untuk mempromosikan masakan Klungkung. Dengan dedikasi yang tinggi, Chef Ayu mempelajari dan mengasah kemampuannya dalam memasak masakan tradisional Klungkung. Melalui kreativitasnya, ia menghadirkan sentuhan modern pada resep klasik, menghasilkan kombinasi yang unik dan memikat. Dengan menjual masakan Klungkung, Chef Dewi berharap dapat memperkenalkan kekayaan budaya dan cita rasa khas daerahnya kepada khalayak yang lebih luas.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '2',
            'language' => 'en',
            'name' => 'Nyoman Ayu Wirastuti',
            'image' => 'chef-images/chef-2.jpg',
            'cooked_menu' => '2,3,4,7,8',
            'locations_id' => '2',
            'description' => "Chef Nyoman Ayu Wirastuti is a skilled chef who has dedicated herself to promoting Klungkung cuisine. With a high level of dedication, Chef Ayu has studied and honed her skills in cooking traditional Klungkung dishes. Through her creativity, she brings a modern twist to classic recipes, resulting in unique and enticing combinations. By selling Klungkung cuisine, Chef Dewi hopes to introduce the cultural richness and distinctive flavors of her region to a wider audience.",
        ]);

        Chef::create([
            'name' => 'I Wayan Suparta',
            'image' => 'chef-images/chef-3.jpg',
            'cooked_menu' => '1,2,4,5,6',
            'locations_id' => '3',
            'description' => "Chef I Wayan Suparta merupakan chef berbakat yang telah mengeksplorasi keunikan masakan Klungkung. Melalui perjalanan kuliner dan riset mendalam, Chef Suparta telah mengembangkan keahliannya dalam menyajikan hidangan khas yang mencerminkan warisan budaya Klungkung. Dengan semangat dan dedikasinya, ia bertujuan untuk menyebarkan kelezatan masakan Klungkung ke seluruh Indonesia dan dunia, memperkenalkan cita rasa otentik yang akan meninggalkan kesan abadi di setiap santapan.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '3',
            'language' => 'id',
            'name' => 'I Wayan Suparta',
            'image' => 'chef-images/chef-3.jpg',
            'cooked_menu' => '1,2,4,5,6',
            'locations_id' => '3',
            'description' => "Chef I Wayan Suparta merupakan chef berbakat yang telah mengeksplorasi keunikan masakan Klungkung. Melalui perjalanan kuliner dan riset mendalam, Chef Suparta telah mengembangkan keahliannya dalam menyajikan hidangan khas yang mencerminkan warisan budaya Klungkung. Dengan semangat dan dedikasinya, ia bertujuan untuk menyebarkan kelezatan masakan Klungkung ke seluruh Indonesia dan dunia, memperkenalkan cita rasa otentik yang akan meninggalkan kesan abadi di setiap santapan.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '3',
            'language' => 'en',
            'name' => 'I Wayan Suparta',
            'image' => 'chef-images/chef-3.jpg',
            'cooked_menu' => '1,2,4,5,6',
            'locations_id' => '3',
            'description' => "Chef I Wayan Suparta is a talented chef who has explored the uniqueness of Klungkung cuisine. Through culinary journeys and in-depth research, Chef Suparta has developed skills in presenting special dishes that reflect Klungkung's cultural heritage. With enthusiasm and dedication, he aims to spread the deliciousness of Klungkung cuisine throughout Indonesia and the world, introducing authentic flavors that will leave a lasting impression on every dine",
        ]);

        Chef::create([
            'name' => 'Ni Made Sariati',
            'image' => 'chef-images/chef-4.jpg',
            'cooked_menu' => '1,3,4,7,8',
            'locations_id' => '4',
            'description' => "Chef Ni Made Sariati adalah chef muda dan bersemangat yang berdedikasi untuk mempromosikan masakan Klungkung. Dengan pemahaman mendalam tentang budaya dan bahan lokal, Chef Sariati menciptakan hidangan yang memukau dengan sentuhan modern yang kreatif. Dalam menjual masakan Klungkung, Chef Sariati bertujuan untuk mengangkat nilai-nilai lokal dan memperkenalkan keunikan masakan daerahnya kepada khalayak yang lebih luas, sehingga menciptakan apresiasi yang lebih besar terhadap kekayaan kulinernya.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '4',
            'language' => 'id',
            'name' => 'Ni Made Sariati',
            'image' => 'chef-images/chef-4.jpg',
            'cooked_menu' => '1,3,4,7,8',
            'locations_id' => '4',
            'description' => "Chef Ni Made Sariati adalah chef muda dan bersemangat yang berdedikasi untuk mempromosikan masakan Klungkung. Dengan pemahaman mendalam tentang budaya dan bahan lokal, Chef Sariati menciptakan hidangan yang memukau dengan sentuhan modern yang kreatif. Dalam menjual masakan Klungkung, Chef Sariati bertujuan untuk mengangkat nilai-nilai lokal dan memperkenalkan keunikan masakan daerahnya kepada khalayak yang lebih luas, sehingga menciptakan apresiasi yang lebih besar terhadap kekayaan kulinernya.",
        ]);

        ChefTranslation::create([
            'chefs_id' => '4',
            'language' => 'en',
            'name' => 'Ni Made Sariati',
            'image' => 'chef-images/chef-4.jpg',
            'cooked_menu' => '1,3,4,7,8',
            'locations_id' => '4',
            'description' => "Chef Ni Made Sariati is a young and passionate chef dedicated to promoting Klungkung cuisine. With a deep understanding of local culture and ingredients, Chef Sariati creates stunning dishes with creative modern touches. In selling Klungkung cuisine, Chef Sariati aims to elevate local values and introduce the uniqueness of his region's cuisine to a wider audience, creating greater appreciation for its culinary richness.",
        ]);

        Location::create([
            'name' => 'Klungkung Delights',
            'image' => 'location-images/location-1.jpg',
            'address' => 'Jl. Pahlawan No. 123, Klungkung',
            'menu_available' => '1,2,3,4,7,8',
            'description' => "Temukan khazanah kuliner Klungkung di cabang andalan kami, Klungkung Delights. Terletak di jantung kota, restoran kami menampilkan cita rasa otentik dan warisan masakan lokal yang kaya. Masuki suasana yang ramah dan semarak di mana Anda akan tenggelam dalam pemandangan, suara, dan aroma kreasi kuliner kami. Dari hidangan tradisional Bali hingga kelezatan perpaduan modern, koki berbakat kami bangga menggunakan bahan-bahan segar dan teknik inovatif untuk menghadirkan pengalaman bersantap yang benar-benar tak terlupakan. Apakah Anda penggemar kuliner, wisatawan yang ingin tahu, atau warga lokal yang mencari cita rasa rumahan, Klungkung Delights menawarkan perjalanan kuliner yang merayakan esensi warisan gastronomi Klungkung.",
        ]);

        LocationTranslation::create([
            'locations_id' => '1',
            'language' => 'id',
            'name' => 'Klungkung Delights',
            'image' => 'location-images/location-1.jpg',
            'address' => 'Jl. Pahlawan No. 123, Klungkung',
            'menu_available' => '1,2,3,4,7,8',
            'description' => "Temukan khazanah kuliner Klungkung di cabang andalan kami, Klungkung Delights. Terletak di jantung kota, restoran kami menampilkan cita rasa otentik dan warisan masakan lokal yang kaya. Masuki suasana yang ramah dan semarak di mana Anda akan tenggelam dalam pemandangan, suara, dan aroma kreasi kuliner kami. Dari hidangan tradisional Bali hingga kelezatan perpaduan modern, koki berbakat kami bangga menggunakan bahan-bahan segar dan teknik inovatif untuk menghadirkan pengalaman bersantap yang benar-benar tak terlupakan. Apakah Anda penggemar kuliner, wisatawan yang ingin tahu, atau warga lokal yang mencari cita rasa rumahan, Klungkung Delights menawarkan perjalanan kuliner yang merayakan esensi warisan gastronomi Klungkung.",
        ]);

        LocationTranslation::create([
            'locations_id' => '1',
            'language' => 'en',
            'name' => 'Klungkung Delights',
            'image' => 'location-images/location-1.jpg',
            'address' => 'Jl. Pahlawan No. 123, Klungkung',
            'menu_available' => '1,2,3,4,7,8',
            'description' => "Discover the culinary treasures of Klungkung at our flagship branch, Klungkung Delights. Situated in the heart of the city, our restaurant showcases the authentic flavors and rich heritage of local cuisine. Step into a welcoming and vibrant atmosphere where you'll be immersed in the sights, sounds, and aromas of our culinary creations. From traditional Balinese dishes to modern fusion delights, our talented chefs take pride in using the freshest ingredients and innovative techniques to deliver a truly unforgettable dining experience. Whether you're a food enthusiast, a curious traveler, or a local looking for a taste of home, Klungkung Delights offers a culinary journey that celebrates the essence of Klungkung's gastronomic heritage.",
        ]);

        Location::create([
            'name' => 'Klungkung Spice House',
            'image' => 'location-images/location-2.jpg',
            'address' => 'Jl. Raya Semarapura No. 88, Klungkung',
            'menu_available' => '2,3,4,5,6,7,8',
            'description' => 'Selamat datang di Rumah Rempah Klungkung, tempat cita rasa menjadi hidup. Terletak di jantung Klungkung, restoran kami mengundang Anda dalam petualangan kuliner melalui dunia rempah-rempah yang semarak. Rasakan perpaduan sempurna antara hidangan tradisional dan kontemporer yang terinspirasi oleh kekayaan tradisi kuliner Bali. Dari kari aromatik hingga sate yang mendesis, koki ahli kami membuat setiap hidangan dengan presisi dan semangat, memastikan simfoni rasa yang akan menggoda selera Anda. Masuki suasana kami yang nyaman dan mengundang, di mana keramahtamahan yang hangat dan layanan sempurna melengkapi cita rasa istimewa di piring Anda. Di Klungkung Spice House, kami percaya bahwa setiap hidangan adalah kesempatan untuk menciptakan kenangan, dan kami berdedikasi untuk memberi Anda pengalaman bersantap yang luar biasa yang akan meninggalkan kesan abadi.',
        ]);

        LocationTranslation::create([
            'locations_id' => '2',
            'language' => 'id',
            'name' => 'Klungkung Spice House',
            'image' => 'location-images/location-2.jpg',
            'address' => 'Jl. Raya Semarapura No. 88, Klungkung',
            'menu_available' => '2,3,4,5,6,7,8',
            'description' => 'Selamat datang di Rumah Rempah Klungkung, tempat cita rasa menjadi hidup. Terletak di jantung Klungkung, restoran kami mengundang Anda dalam petualangan kuliner melalui dunia rempah-rempah yang semarak. Rasakan perpaduan sempurna antara hidangan tradisional dan kontemporer yang terinspirasi oleh kekayaan tradisi kuliner Bali. Dari kari aromatik hingga sate yang mendesis, koki ahli kami membuat setiap hidangan dengan presisi dan semangat, memastikan simfoni rasa yang akan menggoda selera Anda. Masuki suasana kami yang nyaman dan mengundang, di mana keramahtamahan yang hangat dan layanan sempurna melengkapi cita rasa istimewa di piring Anda. Di Klungkung Spice House, kami percaya bahwa setiap hidangan adalah kesempatan untuk menciptakan kenangan, dan kami berdedikasi untuk memberi Anda pengalaman bersantap yang luar biasa yang akan meninggalkan kesan abadi.',
        ]);

        LocationTranslation::create([
            'locations_id' => '2',
            'language' => 'en',
            'name' => 'Klungkung Spice House',
            'image' => 'location-images/location-2.jpg',
            'address' => 'Jl. Raya Semarapura No. 88, Klungkung',
            'menu_available' => '2,3,4,5,6,7,8',
            'description' => 'Welcome to Klungkung Spice House, where flavors come alive. Nestled in the heart of Klungkung, our restaurant invites you on a culinary adventure through the vibrant world of spices. Experience the perfect blend of traditional and contemporary dishes inspired by the rich culinary traditions of Bali. From aromatic curries to sizzling satays, our expert chefs craft each dish with precision and passion, ensuring a symphony of flavors that will tantalize your taste buds. Step into our cozy and inviting ambiance, where warm hospitality and impeccable service complement the exquisite flavors on your plate. At Klungkung Spice House, we believe that every meal is an opportunity to create memories, and we are dedicated to providing you with an exceptional dining experience that will leave a lasting impression.',
        ]);

        Location::create([
            'name' => 'Klungkung Street Bites',
            'image' => 'location-images/location-3.jpg',
            'address' => 'Jl. Diponegoro No. 77, Klungkung',
            'menu_available' => '1,3,4,5,7,8',
            'description' => 'Mulailah perjalanan kuliner melalui jalan-jalan Klungkung yang ramai di Klungkung Street Bites. Terletak di jantung kota, restoran kami menyatukan cita rasa yang semarak dan beragam budaya jajanan Klungkung. Manjakan diri dengan beragam gigitan lezat, mulai dari sate gurih hingga mie yang menggugah selera, semuanya disiapkan dengan sangat hati-hati dan perhatian terhadap detail. Menu kami menyajikan jajanan pinggir jalan lokal terbaik, menawarkan perpaduan favorit tradisional dan kreasi inovatif yang akan memuaskan hasrat Anda. Benamkan diri Anda dalam suasana semarak area tempat duduk luar ruangan kami, di mana aroma hidangan yang mendesis dan suara obrolan ramai menciptakan pengalaman kuliner kaki lima yang autentik. Di Klungkung Street Bites, kami mengajak Anda menjelajahi khazanah kuliner Klungkung satu suapan.',
        ]);

        LocationTranslation::create([
            'locations_id' => '3',
            'language' => 'id',
            'name' => 'Klungkung Street Bites',
            'image' => 'location-images/location-3.jpg',
            'address' => 'Jl. Diponegoro No. 77, Klungkung',
            'menu_available' => '1,3,4,5,7,8',
            'description' => 'Mulailah perjalanan kuliner melalui jalan-jalan Klungkung yang ramai di Klungkung Street Bites. Terletak di jantung kota, restoran kami menyatukan cita rasa yang semarak dan beragam budaya jajanan Klungkung. Manjakan diri dengan beragam gigitan lezat, mulai dari sate gurih hingga mie yang menggugah selera, semuanya disiapkan dengan sangat hati-hati dan perhatian terhadap detail. Menu kami menyajikan jajanan pinggir jalan lokal terbaik, menawarkan perpaduan favorit tradisional dan kreasi inovatif yang akan memuaskan hasrat Anda. Benamkan diri Anda dalam suasana semarak area tempat duduk luar ruangan kami, di mana aroma hidangan yang mendesis dan suara obrolan ramai menciptakan pengalaman kuliner kaki lima yang autentik. Di Klungkung Street Bites, kami mengajak Anda menjelajahi khazanah kuliner Klungkung satu suapan.',
        ]);

        LocationTranslation::create([
            'locations_id' => '3',
            'language' => 'en',
            'name' => 'Klungkung Street Bites',
            'image' => 'location-images/location-3.jpg',
            'address' => 'Jl. Diponegoro No. 77, Klungkung',
            'menu_available' => '1,3,4,5,7,8',
            'description' => 'Embark on a culinary journey through the bustling streets of Klungkung at Klungkung Street Bites. Located in the heart of the city, our eatery brings together the vibrant flavors and diverse street food culture of Klungkung. Indulge in a wide array of delectable bites, from savory skewers to mouthwatering noodles, all prepared with the utmost care and attention to detail. Our menu showcases the best of local street food, offering a mix of traditional favorites and innovative creations that will satisfy your cravings. Immerse yourself in the lively ambiance of our outdoor seating area, where the aroma of sizzling dishes and the sounds of bustling chatter create an authentic street food experience. At Klungkung Street Bites, we invite you to explore the culinary treasures of Klungkung one bite at a time.',
        ]);

        Location::create([
            'name' => 'Klungkung Coastal Flavors',
            'image' => 'location-images/location-4.jpg',
            'address' => 'Jl. Pantai Klotok No. 55, Klungkung',
            'menu_available' => '1,2,3,4,6,8',
            'description' => "Rasakan cita rasa lautan di Klungkung Coastal Flavours. Terletak di sepanjang pantai Klungkung yang masih asli, restoran tepi pantai kami menawarkan pengalaman bersantap unik yang merayakan kekayaan laut. Manjakan diri dengan berbagai hidangan seafood segar yang disiapkan oleh koki ahli kami. Dari ikan bakar hingga udang yang lezat, setiap hidangan menampilkan rasa alami tangkapan lokal terbaik. Nikmati pemandangan laut yang menakjubkan saat Anda bersantap di area tempat duduk terbuka kami, dikelilingi angin laut yang lembut dan suara ombak yang menenangkan. Apakah Anda seorang pecinta makanan laut, penggemar alam, atau hanya mencari pelarian yang tenang, Klungkung Coastal Flavours menjanjikan perjalanan kuliner yang menangkap esensi pesona pesisir Klungkung.",
        ]);

        LocationTranslation::create([
            'locations_id' => '4',
            'language' => 'id',
            'name' => 'Klungkung Coastal Flavors',
            'image' => 'location-images/location-4.jpg',
            'address' => 'Jl. Pantai Klotok No. 55, Klungkung',
            'menu_available' => '1,2,3,4,6,8',
            'description' => "Rasakan cita rasa lautan di Klungkung Coastal Flavours. Terletak di sepanjang pantai Klungkung yang masih asli, restoran tepi pantai kami menawarkan pengalaman bersantap unik yang merayakan kekayaan laut. Manjakan diri dengan berbagai hidangan seafood segar yang disiapkan oleh koki ahli kami. Dari ikan bakar hingga udang yang lezat, setiap hidangan menampilkan rasa alami tangkapan lokal terbaik. Nikmati pemandangan laut yang menakjubkan saat Anda bersantap di area tempat duduk terbuka kami, dikelilingi angin laut yang lembut dan suara ombak yang menenangkan. Apakah Anda seorang pecinta makanan laut, penggemar alam, atau hanya mencari pelarian yang tenang, Klungkung Coastal Flavours menjanjikan perjalanan kuliner yang menangkap esensi pesona pesisir Klungkung.",
        ]);

        LocationTranslation::create([
            'locations_id' => '4',
            'language' => 'en',
            'name' => 'Klungkung Coastal Flavors',
            'image' => 'location-images/location-4.jpg',
            'address' => 'Jl. Pantai Klotok No. 55, Klungkung',
            'menu_available' => '1,2,3,4,6,8',
            'description' => "Experience the taste of the ocean at Klungkung Coastal Flavors. Situated along the pristine shores of Klungkung, our beachfront restaurant offers a unique dining experience that celebrates the bounties of the sea. Indulge in an array of fresh seafood delicacies expertly prepared by our skilled chefs. From grilled fish to succulent prawns, each dish showcases the natural flavors of the finest local catches. Savor the breathtaking views of the ocean as you dine in our open-air seating area, surrounded by the gentle sea breeze and the soothing sound of waves. Whether you're a seafood lover, a nature enthusiast, or simply seeking a tranquil escape, Klungkung Coastal Flavors promises a culinary journey that captures the essence of Klungkung's coastal charm.",
        ]);
    }
}
