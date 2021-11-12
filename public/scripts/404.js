const poke = document.getElementById("poke");
const tree = document.getElementById("tree");
const game = document.getElementsByClassName("game");
const scoreText = document.getElementById("score");

let score = 0;
/*
// jump the pokemon
function jump() {
    if(poke.classList !== "jump") {
        poke.classList.add("jump");

        setTimeout(function (){
            poke.classList.remove("jump");
        },300)
    }
}

// move the tree
function obstacles() {
    if (tree.classList !== "obstacles") {
        tree.classList.add("obstacles");
    }
    if (score > 1000) {
        tree.style.animation = "block 0.9s infinite linear";
    }
    if (score > 5000) {
        tree.style.animation = "block 0.8s infinite linear";
    }
    if (score > 10000) {
        tree.style.animation = "block 0.7s infinite linear";
    }
    if (score > 15000) {
        tree.style.animation = "block 0.6s infinite linear";
    }
}


let isAlive = setInterval(function () {
    //get current poke Y position on stage
    let pokeTop = parseInt(window.getComputedStyle(poke).getPropertyValue("top"));
    //get current tree X position on stage
    let treeLeft = parseInt(window.getComputedStyle(tree).getPropertyValue("left"));

    //detect collision
    if(treeLeft < 50 && treeLeft > 0 && pokeTop >= 140) {
        //collision
        tree.classList.remove("obstacles")
        poke.style = "";
        scoreText.innerText = score;
        Swal.fire({
            title:"PAN T'ES MORT !",
            text: "Score : " +score,
            imageUrl: 'https://cdn.donmai.us/sample/ab/b8/sample-abb817e078192dde1b5ac02b88efcc8a.jpg',
            imageWidth: '400',
            imageHeight: '200',
            imageAlt: 'Custom Image',
            confirmButtonText: 'Je recommence !',
        });
        score = 0;
        throw new Error("lose")  ;
    }
},10);

let calculScore = setInterval( function() {
    if(tree.classList == "obstacles") {
        if (score < 5000) {
            score += 1;
        }
        if (score >= 5000) {
            score +=2;
        }
        if (score >= 10000) {
            score +=3;
        }
        scoreText.innerText = score;
    } else {
        score = 0;
    }
}, 150)


// space for jump
document.addEventListener("keydown", function (event) {
    jump();
    poke.style = "background-image: url('../assets/piplup/test.gif')";
});

// start the game
document.addEventListener("keydown", function (event) {
    obstacles();
});
*/

