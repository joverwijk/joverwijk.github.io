// 'Namengenerator'
function give_me_some_nice_name(gender) {
    if (gender == 'male') {
        const names = [
            'Arnold', 'Jarno', 'Appie'
        ];
        let choose_name = names[Math.floor(Math.random() * names.length)];
        console.log('Naam: ' + choose_name);
    } else if (gender == 'female') {
        const names = [
            'Greetje'
        ];
        let choose_name = names[Math.floor(Math.random() * names.length)];
        console.log('Naam: ' + choose_name);
    } else {
        console.log("Kies een geslacht (\'male\' of \'female\')");
    }
}

// Pig time!
function show_pigs(i) {
    let pigs = '';
    if (i > 0) {
        for (let k = 0; k < i; k++) {
            const emoji = String.fromCodePoint(0x1F437);
            pigs += emoji;
        }
    } else if (i == 0) {
        pigs = 'No pigs for you :(';
    } else if (i < 0) {
        pigs = 'Ever heard of a negative number of pigs?';
    } else {
        pigs = 'Geef een nummer.';
    }
    return console.log(pigs + ' knor!');
}

// Factorial
function factorial(num) {
    let sum = 1;
    for (let i = 1; i < num + 1; i++) {
        sum = sum * i;
    }
    return console.log(sum);
}

/* Callbacks */
// speel geluid af
function play_write_animal_sound() {
    let animal = prompt('Enter animal');
    const sounds = [
        {
            'name' : 'cat',
            'sound' : 'meow',
            'audio' : 'this.mp3'
        },
        {
            'name' : 'dog',
            'sound' : 'woof',
            'audio' : 'that.mp3'
        },
        {
            'name' : 'horse',
            'sound' : 'hinnik',
            'audio' : 'thus.mp3'
        },
        {
            'name' : 'bird',
            'sound' : 'tsjilp',
            'audio' : 'then.mp3'
        }
    ];
    const animal_noise = sounds.find(x => x.name === animal).audio;
    const play_sound = new Audio(animal_noise);

    const output = 'A(n) ' + animal + ' makes ' + sounds.find(x => x.name === animal).sound + ' as sound. Listen...';

    return console.log(output), play_sound;
}