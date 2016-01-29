import unittest

class FizzBuzzTest(unittest.TestCase):
    def setUp(self):
        rules = { 
                3: 'Fizz',
                5: 'Buzz',
                7: 'Bang',
        }
        self.fizz_buzz = FizzBuzz(rules)

    def test_returns_number_when_no_matching_with_the_rule(self):
        self.assertEqual(1, self.fizz_buzz.say(1))
        self.assertEqual(2, self.fizz_buzz.say(2))


    def test_returns_fizz_when_number_is_multiple_of_three(self):
        self.assertEqual('Fizz', self.fizz_buzz.say(3))
        self.assertEqual('Fizz', self.fizz_buzz.say(6))

    def test_returns_buzz_when_number_is_multiple_of_five(self):
        self.assertEqual('Buzz', self.fizz_buzz.say(5))
        self.assertEqual('Buzz', self.fizz_buzz.say(10))

    def test_returns_bang_when_number_is_multiple_of_seven(self):
        self.assertEqual('Bang', self.fizz_buzz.say(7))

    def test_returns_fizzbuzz_when_number_is_multiple_of_three_and_five(self):
        self.assertEqual('FizzBuzz', self.fizz_buzz.say(15))

    def test_returns_fizzbuzzbang_when_number_is_multiple_of_three_and_five_and_bang(self):
        self.assertEqual('FizzBuzzBang', self.fizz_buzz.say(3*5*7))

class FizzBuzz(object):
    def __init__(self, rules):
        self.rules = rules

    def say(self, number):
        message = ''

        for multiple, word in self.rules.iteritems():
            if number % multiple == 0:
                message += word

        if message != '':
            return message
            
        return number

if __name__ == '__main__':
    unittest.main()
