<?php 

//Array of All District of Bangladesh 
$bd_location_array = [
    'barisal' => explode(', ', 'barisal, bhola, jhalokati, patuakhali, pirojpur'),
    'chittagong' => explode(', ', 'bandarban, brahmanbaria, chandpur, chittagong, comilla, cox\'s bazar, feni, khagrachhari, lakshmipur, noakhali, rangamati'),
    'dhaka' => explode(', ', 'dhaka, gazipur, narsingdi, manikganj, munshiganj, narayanganj, mymensingh, sherpur, jamalpur, netrokona, kishoreganj, tangail, faridpur, maradipur, shariatpur, rajbari, gopalganj'),
    'khulna' => explode(', ', 'bagerhat, chuadanga, jessore, jhenaidaha, khulna, kushtia, magura, meherpur, narail, satkhira'),
    'rajshahi' => explode(', ', 'bogra, joypurhat, naogaon, natore, nawabganj, pabna, rajshahi, sirajganj'),
    'rangpur' => explode(', ', 'dinajpur, gaibandha, kurigram, lalmonirhat, nilphamari, panchagarh, rangpur, thakurgaon'),
    'sylhet' => explode(', ', 'habiganj, maulvi bazar, sunamganj, sylhet'),
];

//Get Division as option list
function get_division_option($array) {
    echo "<option>Select Division</option>\n";
    foreach ($array as $div => $divDist) {
       echo "<option value='".$div."'>".ucfirst($div)."</option>\n";
    }
}

// Call the function to get Division as option list
// get_division_option($bd_location_array);




//Get District Option list based on Division
function get_dist_option($array){
    echo "<option>Select District</option>\n";
    foreach ($array as $dist => $index) {
       echo "<option value='".$index."'>".ucfirst($index)."</option>\n";
    } 
}

// Call the funcion to get District as option list
// get_division_option($bd_location_array['dhaka']);

