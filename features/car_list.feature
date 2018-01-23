Feature:
  In order to prove that Symfony is correctly installed
  As a user
  I want to have a "Hello world" page

  Scenario: The hello world page should contain "Hello world"
    Given there are the following cars in the database:
      | License plate |
      |         00001 |
    When I am on "/cars"
    Then I should see "Success"

