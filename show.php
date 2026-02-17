<?php
session_start();

// BTS messages
$messages = [
    1 =>  "Being thankful for the life that's given to me",
                  2 =>   "Though I'm standing under the frozen sunset,\nI will walk towards you, one step at a time",
                 3 =>   "You were the light that led me to you",
                  4 =>  "I live so I love",
                  5 =>  "No season can last forever",
                  6 =>  "Don't stop and worry yourself. It's good for nothing.",
                 7 =>   "We were only seven, but we have you all now.",
                 8 =>   "You are the cause of my euphoria.",
                  9 =>  "I wish you happiness everyday",
                 10 =>  "It's okay to stop. There's no need to run without even knowing the reason",
                     11 =>  "All these lights are colored in by you.",
                  12 =>  "You can't stop me loving Myself",
                  13 =>  "We're happy right now\nSo why don't we ride this feeling",
                  14 =>  "You make my world light up inside",
                  15 =>  "I'll push you from the east of sufferings to the west of peace",
                   16 => "Keep on shining, make it brighter than a spotlight",
                 17 =>  "Where there is hope, there is always hardship",
                  18 =>  "Live just like we're golden",
                  19 =>  "Even the scares from your mistakes can be your own constellation",
                  20 =>  "You've shown me I've reasons I should love myself",
                  21 =>  "You're my best friend For the rest of my life",
                  22 =>  "You're the last reason for me who was standing on the edge of cliff",
                  23 =>  "Life goes on Let's live on",
                  24 =>  "You'll be only one who can protect yourself",
                  25 =>  "I just love you we love you, and we're BTS, you're army we're each other's everything",
                  26 =>  "we'll be running wild, lovin' 'til the sun is out,\nrunning 'til there's nothing left til our last breath",
                  27 =>  "You're the star that turns ordinaries into extraordinaries",
                  28 =>  "Future's gonna be okay",
                 29 =>  "I'll be there. today, as always, I linger by your side",
                  30 =>  "You're my silver Lining",
                  31 =>  "When you feel down, when you feel all alone\nWhen you need someone to lean on, I'll be there for you",
                  32 =>  "You're my silver Lining",
                  33 =>  "It's okay to shed tear but don't you tear yourself",
                  34 =>  "Happiness is not something that you have to achieve",
                   35 =>  "Follow your dream like breaker\neven if it breaks down don't even run backwards never",
                  36 =>  "Dream, though you beginnings maybe humble may the end be prosperous",
                   37 =>  "The world has never let us dream, nor has it ever taught us how to dream.\nAnd then they say it's your fault, but it's not.\nDon't blame yourself. When you're having a tough time, you can lean on us",
                   38 =>  "Please use me, please use BTS to love yourself",
                   39 =>  "I'll circle around your side\nI'll stay by your side\nI'll become your light.\nAll for you",
                   40 =>  "You're one in million so let all your colors shine",
                   41 =>  "Do what you like. Don't worry about what other people might think. What's important is what you want",
                   42 =>  "I'll tell you again We'll never ever give up, forever\nI'll say it again, We'll always be alive to move us",
                   43 =>  "Shine dream smile",
                  44 =>  "We're together, so I'm not afraid of hoping for eternity\nYou are my trust and you're the only reason",
                  45 =>  "I'm the one I should love in this world",
                  46 =>  "Hate'll paralyze your mind\nGotta see the other side\nIt costs ya nothing to be kind",
                  47 =>  "Let's make a door in your heart\nopen the door and this place will await\nThe magic shop will comfort you",
                  48 =>  "After all this time, there is only one thing I've learned\nI'll be forever me.\nLeft behind these memories mixed up so vividly now I'll be protecting myself.\nSo no looking back, no No looking back",
                   49 =>  "You got the best of me.\nSo please just don't leave me",
                  50 =>  "Even when I fall and hurt myself I keep running toward my dream",
                  51 =>  "Memories like gold, we'll never let go",
                  52 =>  "Run beautiful run yeah you gotta run",
                 53 =>  "Us is plural of U",
                 54 =>  "try to be generous to yourself from time to time",
                 55 =>  "No matter what others say, no matter what the world says,\nyou're the best to me just the way you are",
                 56 =>  "the thing that brightens me is the star that's been embroidered with love called 'you'\nis you, who's in my galaxy, making another different world",
                 57 =>  "We laugh together\nWe cry together\nI guess these simple feelings were everything to me",
                 58 =>  "It's alright now count 1,2,3 and forget\nErase all sad memories\nHold my hands and smile",
                 59 =>  "You and I best moment is yet to come",
                 60 =>  "When the clock's second-hand\nCrosses the minute-hand\nThe world hold its breath for just a moment\nZero o'Clock",
                 61 =>  "I get heaven to myself when i'm with you and i love you",
                  62 =>  "I left a purple balloon in your dream look it up",
                  63 =>  "Love is a maze damn but you is amaze yeah",
                  64 =>  "Keep on shining, make it brighter than a spotlight",
                  65 =>  "Maybe in another place , another time\nIf I can turn it around\nWill I be by your side then?\nI'm waiting for you , I'll be here in the background",
                  66 =>  "I promise, I will come to you.\nIf you need me, I will come to you.",
                  67 =>  "Don't be upset that someone didn't comfort you. If you're out of mind, why don't you try to do more and do less? You're less concerned, less worried, less tired, and take a little break",
                    68 =>  "I want you forever I want to be forever with you",
                  69 =>  "Even if I want to fly, I have no wings. Your hands become my wings",
                 70 =>  "You just have to look at my galaxies Be showered with all those stars\nI'll give you my world",
                 71 =>  "Sometimes we may get tired or sick\nThat's okay, I am by your side",
                 72 =>  "You gave me the best of me so I'll give you the best of you",
                 73 =>  "If we're together, even an endless maze is paradise",
                 74 =>  "Listen to your heartbeat,\nit calls you whenever it wants to\nbeacuse within this pitch black darkness, You are shining so brightly",
                 75 =>  "You worth it you perfect deserve it, just work it",
                 76 =>  "If we live fast let us die young",
                    77 =>  "Seven equals one, right, our heart still beats as one"
];
if(isset($_POST['number'])){
    $num = $_POST['number'];

    if($num >= 1 && $num <= 77){
        $_SESSION['last_msg'] = $messages[$num];
    } else {
        $_SESSION['last_msg'] = "Invalid number!";
    }
} else {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Your BTS Message</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Your Message 💜</h1>
    <div class="container">


    <p class="message-container">
        <?php echo nl2br($_SESSION['last_msg']); ?>
    </p>

    <br>
 <a href="index.php" class="btn2">Choose Another Number</a>

   
    </div>
   

    

</body>
</html>
