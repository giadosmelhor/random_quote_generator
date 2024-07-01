<?php
function getRandomQuote() {
    $quotes = [
        "The best time to plant a tree was 20 years ago. The second best time is now.",
        "An unexamined life is not worth living.",
        "Eighty percent of success is showing up.",
        "Your time is limited, so don’t waste it living someone else’s life.",
        "Winning isn’t everything, but wanting to win is.",
        "I am not a product of my circumstances. I am a product of my decisions.",
        "Every child is an artist. The problem is how to remain an artist once he grows up.",
        "You can never cross the ocean until you have the courage to lose sight of the shore.",
        "I’ve learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.",
        "Either you run the day, or the day runs you."
    ];
    return $quotes[array_rand($quotes)];
}

echo "Here is your inspirational quote for the day:<br>";
echo getRandomQuote();
?>
