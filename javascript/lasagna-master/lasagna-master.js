/// <reference path="./global.d.ts" />
// @ts-check

/**
 * Implement the functions needed to solve the exercise here.
 * Do not forget to export them so they are available for the
 * tests. Here an example of the syntax as reminder:
 *
 * export function yourFunction(...) {
 *   ...
 * }
 */

export function cookingStatus(minutes) {
    if (minutes === undefined) {
        return 'You forgot to set the timer.';
    } else if (minutes === 0) {
        return 'Lasagna is done.';
    } else {
        return 'Not done, please wait.';
    }
}

export function preparationTime(layers, minutesPerLayer) {
    if (minutesPerLayer === undefined) {
        minutesPerLayer = 2;
    }
    return layers.length * minutesPerLayer;
}

export function quantities(layers) {
    let noodles = 0;
    let sauce = 0;
    layers.forEach(layer => {
        if (layer === 'noodles') {
            noodles+=50;
        } else if (layer === 'sauce') {
            sauce += 0.2;
        }
    });
    return {
        'noodles': noodles,
        'sauce': sauce,
    }
}

export function addSecretIngredient(first, second) {
    let secret = first[first.length - 1];
    second.push(secret);
}

export function scaleRecipe(recipe, portions) {
    let newRecipe = {};
    let scaleFactor = portions / 2;
    for(let ingredient in recipe) {
        newRecipe[ingredient] = recipe[ingredient] * scaleFactor;
    }
    return newRecipe;
}