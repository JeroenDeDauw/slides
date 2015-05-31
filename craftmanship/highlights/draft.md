# Intro

* Tools you can use right away to write better code

* Quick points, no underbuilding


# Motivation

* We want to go fast
	Provide more value / be more lazy

* Tradable quality hypothesis
	Big investment needed: skills
	The only way to go fast is to go well

* Writing code for humans
	Quote
	Maintenance

* Craftsmanship


# Quality / Design

* Naming

* Complexity
	Minimize scope
	Minimize state

* Minimize coupling
	Number of classes bound to
	Program against "interfaces"
	Inheritance is the strongest coupling, not for code reuse - favour composition over inheritance

* Functions
	Few ELOC
	Little nesting
	One level of abstraction
	Only one area, else split

* Global / static
	Dependency injection

* Simple design is not simple
	Effort is required to write easy to understand code

* Yagni
	Don't add complexity because you think you will need it
	Do make code clean and more easy to change

* SOLID
	One thing
	Minimize changes to classes already doing their job
	Squares are not rectangles
	Client specific interfaces instead of one general purpose one
	Program against "interfaces"
	
* Design patterns
	Toolbox
	Communication

* Layers
	Don't bind to database, delivery or FW

* Tests
	Testable code and malleable design go hand in hand

# Outro

* Avoid dogma
	Tradeoffs everywhere
	Transcend the rules

