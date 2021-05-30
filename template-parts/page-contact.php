<?php
/**
  *  Template Name: Contact page
*/
get_header();
?>


<?php
// define variables and set to empty values
    $visitor_name = "";
    $visitor_suffix= "";
    $visitor_email = "";
    $visitor_occupation = "";
    $visitor_dob = "";
    $gender_selection = "";
    $visitor_address = "";
    $visitor_city= "";
    $visitor_state = "";
    $visitor_postal = "";
    $visitor_country = "";
    $visitor_phone= "";
    $visitor_asd ="";
    $adult ="";
    $adolescence ="";
    $sibling = "";
    $IT ="";
    $Coffee = "";
    $Others = "";
    $Message = "Thank you! We have received your request";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $visitor_name = test_input($_POST["visitor_name"]);
    $visitor_suffix = test_input($_POST["visitor_suffix"]);
    $visitor_email = test_input($_POST["visitor_email"]);
    $visitor_occupation = test_input($_POST["visitor_occupation"]);
    $visitor_dob = test_input($_POST["visitor_dob"]);
    $gender_selection = test_input($_POST["gender_selection"]);
    $visitor_address = test_input($_POST["visitor_address"]);
    $visitor_city= test_input($_POST["visitor_city"]);
    $visitor_state = test_input($_POST["visitor_state"]);
    $visitor_postal = test_input($_POST["visitor_postal"]);
    $visitor_country = test_input($_POST["visitor_country"]);
    $visitor_phone=  test_input($_POST["visitor_phone"]);
    $visitor_asd = test_input($_POST["visitor_asd"]);
    $adult = test_input($_POST["adult"]);
    $adolescence =  test_input($_POST["adolescence"]);
    $sibling =  test_input($_POST["sibling"]);
    $IT = test_input($_POST["IT"]);
    $Coffee = test_input($_POST["Coffee"]);
    $Others = test_input($_POST["Others"]);
    $Message = "Thank you! We have received your request";

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
    if (have_posts()):
        while ( have_posts() ):the_post();?>
        <div class="grid justify-items-center mx-12 lg:mx-28">
            <h1 class="font-sans text-5xl font-light text-gray-500 my-14"><?php the_title() ?></h1>

            <div class="grid grid-cols-1 md:grid-cols-2 justify-items-center mb-14">
                <img class="w-11/12 shadow-2xl" src="<?php echo get_template_directory_uri() ?>/assets/img/contact.png" alt="image" >
                <div class="justify-self-stretch grid w-full ml-5 grid-flow-row auto-rows-max">
                    <div class="">
                        <?php the_content() ?>
                    </div>
                    <div>
                        <h1> Send us your thoughts now! </h1>
                    </div>
                    <div class="Form">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                            <div class="contact_elem-group">
                                <label class="contact_label" for="name">Your Name</label>
                                <input class="contact_input" type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="suffix">Suffix</label>
                                <input class="contact_input" type="text" id="suffix" name="visitor_suffix" placeholder="Mr. Mrs Ms" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="email">Your E-mail</label>
                                <input class="contact_input" type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="occupation">Occupation</label>
                                <input class="contact_input" type="text" id="occupation" name="visitor_occupation"  required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="dob">Date of Birth</label>
                                <input class="contact_input" type="date" id="dob" name="visitor_dob"  required>
                            </div>
                            <div class="contact_elem-group">
                                <label for="gender_selection">Your gender</label>
                                <select class="contact_select" id="gender-selection" name="gender_selection" required>
                                    <option value="">Choose your gender</option>
                                    <option value="billing">Male</option>
                                    <option value="marketing">Female</option>
                                    <option value="technical support">Other</option>
                                </select>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="address">Address</label>
                                <input class="contact_input" type="text" id="address" name="visitor_address"  required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="address">City</label>
                                <input class="contact_input" type="text" id="city" name="visitor_city"  required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="state">State</label>
                                <input class="contact_input" type="text" id="state" name="visitor_state"  required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="title">Postal Code</label>
                                <input class="contact_input" type="text" id="postal" name="visitor_postal" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="title">Country</label>
                                <input class="contact_input" type="text" id="country" name="visitor_country" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="phone">Phone Number</label>
                                <input class="contact_input" type="number" id="phone" name="visitor_phone" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="phone">ASD Diagnosis</label>
                                <input class="contact_input" type="text" id="ASD" name="visitor_asd" required>
                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="Volunteer">Interest volunteering in? Please tick/check</label>
                                <input type="checkbox" id="adult" name="adult" value="adult">
                                <label for="Adult"> Adults’ Group</label><br>

                                <input type="checkbox" id="adolescence" name="adolescence" value="adolescence">
                                <label for="Adolescence"> Adolescence's Group</label><br>

                                <input type="checkbox" id="sibling" name="sibling" value="sibling">
                                <label for="Sibling">Siblings’ Group</label><br><br>

                                <input type="checkbox" id="IT" name="IT" value="IT">
                                <label for="IT">IT Club</label><br><br>

                                <input type="checkbox" id="Coffee" name="Coffee" value="Coffee">
                                <label for="Coffee">Coffee Morning</label><br><br>

                                <input type="checkbox" id="Others" name="Others" value="Others">
                                <label for="Others">Others</label><br><br>

                            </div>
                            <div class="contact_elem-group">
                                <label class="contact_label" for="Volunteer">Preferred volunteer location? Please tick/check</label>

                                <input type="checkbox" id="Townsville" name="Townsville" value="Townsville">
                                <label for="Townsville">Within Townsville</label><br>

                                <input type="checkbox" id="NorthQueensland" name="NorthQueensland" value="NorthQueensland">
                                <label for="NorthQueensland">Anywhere in North Queensland</label><br>

                                <input type="checkbox" id="Australia" name="Australia" value="Australia">
                                <label for="Australia">Anywhere in Australia</label><br><br>



                            </div>
                            <button class="contact_button" type="submit">Send Message</button>
                        </form>

                    </div>

                    
                    <?php
                    echo $Message;
                    echo "<br>";
                    echo $visitor_name;
                    echo "<br>";
                    echo $visitor_email;
                    echo "<br>";
                    echo $visitor_occupation;
                    echo "<br>";
                    echo $visitor_dob;
                    echo "<br>";
                    echo $gender_selection;
                    echo "<br>";
                    echo $visitor_address;
                    echo "<br>";
                    echo $visitor_city;
                    echo "<br>";
                    echo$visitor_state;
                    echo "<br>";
                    echo $visitor_postal;
                    echo "<br>";
                    echo $visitor_country;
                    echo "<br>";
                    echo $visitor_phone;
                    echo "<br>";
                    echo $visitor_asd;
                    ?>
                </div>
            </div>

        </div>

        <?php endwhile;
    endif;
?>

<?php
get_footer();