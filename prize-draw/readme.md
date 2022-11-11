# Prize Draw
## Description:

To participate in a prize draw each one gives his/her firstname.

Each letter of a firstname has a value which is its rank in the English alphabet. `A` and `a` have rank 1, `B` and `b` rank 2 and so on.

The length of the firstname is added to the sum of these ranks hence a number `som`.

An array of random weights is linked to the firstnames and each `som` is multiplied by its corresponding weight to get what they call a `winning number`.

Now one can sort the firstnames in decreasing order of the `winning numbers`.

### Task:
- parameters: `st` a string of firstnames, `we` an array of weights, `n` a rank
- return: the firstname of the participant whose rank is `n` (ranks are numbered from 1)

### Example
```js
names: "COLIN,AMANDBA,AMANDAB,CAROL,PauL,JOSEPH"
weights: [1, 4, 4, 5, 2, 1]
n: 4

// The function should return: "PauL"
```

### Notes:
- If `st` is empty return "No participants"
- If `n` is greater than the number of participants then return "Not enough participants"

### How to test
```
php ./vendor/bin/phpunit
```