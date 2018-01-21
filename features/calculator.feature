Feature: Calculator
  In order to be able to sum 2 numbers
  I want a page with a form with two fields
  So I can calculate their total sum

  Scenario: Two numbers are typed and their sum is shown
    When I am on "/calculator"
    And I fill in "Number 1" with "3"
    And I fill in "Number 2" with "4"
    And I press "Sum!"
    Then I should see "The result is 7"

  Scenario: An error is displayed if in one of the fields is left blank
    When I am on "/calculator"
    And I fill in "Number 2" with "4"
    And I press "Sum!"
    Then I should see "7"

  Scenario: An error is displayed if in one of the fields an string is introduced
    When I am on "/calculator"
    And I fill in "Number 1" with "three"
    And I fill in "Number 2" with "4"
    And I press "Sum!"
    Then I should see "The7"