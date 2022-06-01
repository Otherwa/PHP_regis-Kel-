list = ["Sometimes I'll start a sentence and I don't even know where it's going. I just hope I find it along the way.",
    "I talk a lot, so I've learned to just tune myself out...",
    "I am Beyoncé always.",
    "Oh, it is on, like a prawn who yawns at dawn.",
    "I am running away from my responsibilities and it feels good.",
    "Should have burned this place down when I had the chance.",
    "One day Michael came in and complained about a speed bump on the highway. I wonder who he ran over then.",
    "Mini cupcakes? As in the mini version of regular cupcakes? Which is already a mini version of cake?",
    "I don't care what they say about me. I just want to eat.",
    "Would I rather be feared or loved? Easy. Both. I want people to be afraid of how much they love me.",
    "Whenever I'm about to do something, I think, 'Would an idiot do that?' and if they would, I do not do that thing",
    "I stopped caring a long time ago",
    "It takes an advanced sense of humor. I don't expect everybody to understand.",
    "I'm not superstitious, but I am a little stitious.",
    "You only live once? False. You live every day. You only die once.",
    "Bears, beets, Battlestar Galactica.",
    "I understand nothing.",
    "i need a weapon.",
    "Ara-Ara",
]

imgs = [
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535dbe67293a2e465f4f21_peep-104.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e532c33f3aa4b390f1bd62f_peep-3.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535256550b761288f23a7b_peep-18.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535720d39923630d5487d7_peep-47.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e5358df64109d4cdc019647_peep-62.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e53560d9b55b04007535350_peep-38.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e5354762b568a35a017730e_peep-30.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e532c33f3aa4b390f1bd62f_peep-3.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535686f5fa1a3aa6f812cb_peep-42.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e5358fb9b55b0b0f453f5f5_peep-63.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e5354c88e249320e005285e_peep-32.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e53578d550b76b873f53c46_peep-51.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535ae064109d61f102506b_peep-79.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e5355ed4600809f5a8dad51_peep-37.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e53591a7371bbb43a9f9d5d_peep-64.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e535c03c6b24912b82c061d_peep-89.svg",
    "https://assets.website-files.com/5e51c674258ffe10d286d30a/5e53523cf3aa4b6f462b2ec0_peep-17.svg",
    "https://ih1.redbubble.net/image.3143685501.8718/st,small,507x507-pad,600x600,f8f8f8.jpg"
]

// rand gen 1 in 289 chance
let x = Math.floor(Math.random() * list.length);
let y = Math.floor(Math.random() * imgs.length);
document.getElementById("meme2").innerHTML = list[x];
document.getElementById("meme1").src = imgs[y];