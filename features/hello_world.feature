Feature:
  In order to prove that Symfony is correctly installed
  As a user
  I want to have a "Hello world" page

  Scenario: The hello world page should contain "Hello world"
    When I am on "/hello-world"
    Then I should see "Hello world"
