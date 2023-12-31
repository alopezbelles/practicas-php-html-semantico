function fizzBuzz(num) {
  if (typeof num !== "number") {
    return "Error: the argument must be a number";
  }

  const divisible = (num, divisor) => num % divisor === 0;
  if (num === 0) {
    return 0;
  }
  if (divisible(num, 3) && divisible(num, 5)) {
    return "fizzBuzz";
  }
  if (divisible(num, 3)) {
    return "fizz";
  }
  if (divisible(num, 5)) {
    return "buzz";
  }
  return num;
}

function print(num) {
  for (let i = 0; i <= num; i++) {
    console.log(`${i} :${fizzBuzz(i)}`);
  }
}

print(16);

module.exports = fizzBuzz;
