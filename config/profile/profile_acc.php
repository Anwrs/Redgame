<?php 

$color = array('#000000', '#00cc99', '#0099ff', '#ffcc00', '#ff0066', '#cc00cc', '#cc0000');
$n = $_SESSION['color'];

$quote = array(
    'Be yourself; everyone else is already taken.', 
    "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.",
    'A room without books is like a body without a soul.',
    "Good, better, best. Never let it rest. 'Til your good is better and your better is best.",
    'Failure will never overtake me if my determination to succeed is strong enough.',
    'Life is 10% what happens to you and 90% how you react to it.',
    'Before you judge a man, walk a mile in his shoes. After that who cares?... He’s a mile away and you’ve got his shoes!',
    'The difference between stupidity and genius is that genius has its limits.',
    'The average dog is a nicer person than the average person.',
    'If you want your children to listen, try talking softly to someone else.',
    "I'm not like a huge gamer myself. I like 'Mario Kart!'",
    'You always want to put your character through different experiences and see how it shapes their worldview.'
    ); 
$q = rand(0, (count($quote)-1));
?>