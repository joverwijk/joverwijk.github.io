// O1, O3b & O4
let me = {
    name: "Jarno Overwijk",
    age: 17,
    previous_diploma: "HAVO",
    transportation_means: {
        type: "auto",
        wheels: 4
    },
    names: [
        'Jarno', 'name2', 'name3', 'name4', 'name5'
    ],
    // O4
    get transportation_function() {
        console.log(`Mijn favoriete vervoersmiddel is de ${this.transportation_means.type} en die heeft ${this.transportation_means.wheels} wielen`);
    },
    get family_names_function() {
        for (let i = 0; i < this.names.length; i++) {
            console.log(this.names[i]);
        }
    }
}

me.transportation_function;
me.family_names_function;

console.log(me);

// O2
// Google is your friend at times :)
me.current_study = "HBO-ICT";
me.dob = "01-12-2000";

console.log(me);

// O3a
let whatever = {
    some_function: function() {
        for (let i = 0; i < 10; i++) {
            console.log('QWERTY');
        }
    },
    some_array: ['M', 'O', 'R', 'E', ' ', 'Q', 'W', 'E', 'R', 'T', 'Y', 'S', 'P', 'A', 'M', '!'],
    some_number: 1234,
    some_string: 'asdfmovie11',
    some_object: {
        some_data_in_object: 12234433,
        more_data_in_object: 'QWERTZ',
        even_more_data_in_object: 'AZERTY'
    },
    some_var: "Nope. Kan niet"
}

console.log(whatever);

// O3b
// favoriet vervoersmiddel
console.log(`Mijn favoriete vervoersmiddel is de ${me.transportation_means.type} en die heeft ${me.transportation_means.wheels} wielen.`);

// namen
for (let i = 0; i < me.names.length; i++) {
    console.log(me.names[i]);
}

// O4: zie O1