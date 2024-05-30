<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>

    <div class="container">
        <h1>Fake Excuse generator</h1>
        <form action="excuse.php" method="get" id="form">
            <label for="name_input" class="label">Name of the child:
                <input type="text" name="name_input" placeholder="Enter the name" id="name_input">
            </label>
            <br>
            <label for="gender_boy" class="label">Gender:
                <input type="radio" name="gender" value="boy" id="gender_boy"> Boy
            </label>
            <label for="gender_girl" class="label">
                <input type="radio" name="gender" value="girl" id="gender_girl"> Girl
            </label>
            <br>
            <label for="teacher" class="label">Nom du professeur:
                <input type="text" name="teacher" id="teacher" placeholder="Enter the name">
            </label>
            <br>
            <label for="illness" class="label">Illness
                <input type="radio" id="illness" name="excuse" value="illness">
            </label>
            <br>
            <label for="death" class="label">Death of the pet (or a family member)
                <input type="radio" id="death" name="excuse" value="death">
            </label>
            <br>
            <label for="activity" class="label">Significant extra-curricular activity
                <input type="radio" id="activity" name="excuse" value="activity">
            </label>
            <br>
            <!-- <label for="my_excuse" class="label">Funny excuse
                <input type="radio" name="my_excuse" id="my_excuse" value="my_excuse">
            </label> --> <!---don't work need to be fixed--->
            <input type="submit" value="send" id="send">
        </form>
    </div>

    <h2>Excuse : </h2>
    <?php
    if (isset($_GET['name_input']) && isset($_GET['teacher']) && isset($_GET['gender']) && isset($_GET['excuse']) && (isset($_GET['other_excuse']) || $_GET['excuse'] != 'other')) {
        $name = $_GET['name_input'];
        $professor = $_GET['teacher'];
        $gender = $_GET['gender'];
        $excuse = $_GET['excuse'];
        $other = $_GET['my_excuse'];

        // Set pronouns based on gender
        $pronoun = ($gender == 'boy') ? 'he' : 'she';
        $possessive = ($gender == 'boy') ? 'his' : 'her';

        if ($excuse == 'illness') {
            echo "<p>Dear Mr./Ms. " . htmlspecialchars($professor) . ",

    I am writing to inform you that my child, " . htmlspecialchars($name) . ", a student at your school, will be unable to attend classes today due to a health issue.

    Our family doctor has diagnosed " . htmlspecialchars($name) . " with a sharp cough and has recommended a period of rest and home care to ensure a full recovery. This absence is therefore medically justified.

    We are available for any further information or to discuss any work that " . htmlspecialchars($name) . " may need to catch up on during $possessive absence.
    Thank you for your understanding.</p>";

        } elseif ($excuse == 'death') {
            echo "<p>Dear Mr./Ms. " . htmlspecialchars($professor) . ",
    I am writing to inform you that my child, " . htmlspecialchars($name) . ", a student at your school, will be unable to attend classes today due to a family bereavement.
    Unfortunately, our family has experienced the loss of a parent. This has been a very difficult time for " . htmlspecialchars($name) . ", and we feel it is important for $pronoun to take the day off to grieve and be with family.We hope that " . htmlspecialchars($name) . " will be able to return to classes soon.
    Thank you for your understanding and support during this difficult time.</p>";


        } elseif ($excuse == 'activity') {
            echo "<p>Dear Mr./Ms. " . htmlspecialchars($professor) . ",

    I am writing to inform you that my child, " . htmlspecialchars($name) . ", a student at your school, will be unable to attend class due to $possessive participation in a significant football competition.

    We understand the importance of regular attendance and are committed to ensuring that " . htmlspecialchars($name) . " makes up for any missed work. We would appreciate it if you could provide any assignments or materials in advance, so " . htmlspecialchars($name) . " can stay on track with $possessive studies.Thank you for your understanding and support.</p>";
        } elseif ($excuse == 'my_excuse') {
            echo "<p>Dear" . $professor . ",

            I hope this message finds you in good spirits. I'm writing to inform you that I won't be able to attend classes today. You see, last night I stumbled upon a mysterious book of ancient spells in my attic, and in a moment of curiosity (or perhaps folly), I attempted to cast a spell to make my morning coffee refill itself indefinitely.
            
            However, it seems I may have mispronounced an incantation or two, as instead of a magical coffee pot, I woke up to find my kitchen overrun with dancing teacups and a rather grumpy broomstick demanding a union break. While I must admit it's been an amusing morning trying to negotiate with household items, I fear I won't be able to make it to class in time.
            
            I promise to use this unexpected day off wisely, perhaps studying up on proper spell-casting techniques or brushing up on my negotiation skills with disgruntled kitchenware. Rest assured, I'll be back in class tomorrow, hopefully with a newfound understanding of the importance of precise pronunciation.</p>";

        }
    }
    ?>

</body>

</html>
=======
<?php

if (isset($_GET['age'])) {
    $name = $_GET['name_input'];
    $professor = $_GET['teacher'];
    $gender = $_GET['gender'];

    if ($_GET['i']) {
        echo 'Monsieur' . $_professor . ' 

        Mon enfant' . $_name . ', élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui.
        Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos.
        
        Notre enfant devrait reprendre la classe dans une semaine, soit le lundi 20 septembre 2018.
        Pour tout complément d’informations n’hésitez surtout pas à nous contacter.
        
        Nos plus sincères salutations.';
    }
}
?>


<form action="excuse.php" method="get">
    <label for="name_input">Name of the child :
        <input type="text" placeholder="Enter the name" id="name_input">
    </label>
    <br>
    <label for="gender_boy">
        <input type="radio" name="gender" value="boy" id="gender_boy">Boy
    </label>
    <label for="gender_girl">
        <input type="radio" name="gender" value="girl" id="gender_girl">Girl
    </label>
    <br>
    <label for="teacher">Nom du professeur :
        <input type="text" name="teacher" id="teacher" placeholder="Enter the name">
    </label>
    <br>
    <label for="i">Illness
        <input type="radio" id="i" name="excuse" value="illness">
    </label>
    <br>
    <label for="ii">Death of the pet (or a family member)
        <input type="radio" id="ii" name="excuse" value="death">
    </label>
    <br>
    <label for="iii">Significant extra-curricular activity
        <input type="radio" id="iii" name="excuse" value="activity">
    </label>
    <br>
    <label for="iv">Any other excuse of your choice:
        <input type="radio" id="iv" name="other_excuse">
        <input type="text" id="iv" name="other_excuse" placeholder="Enter the excuse">
    </label>
    <input type="submit" value="send">
</form>
>>>>>>> c17a850e24c24890dcebe2c61191d78f687c6cf1
