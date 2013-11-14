# The S in STUPID

Or "Static consdiered harmfull"

The static keyword is perhaps the most abused one in your typical Java or PHP project nowadays.
Many luminaries in the field of software design have written about the typical problems usage
of static bring with them. The Gang of Four said, when asked what they would do if they where
to publish a new version of their classic Design Patterns book, that they'd drop the Singleton
pattern as it is now recognized as an anti-pattern.

So what makes static code so bad? What problem does it typically cause, how do they arise,
how can they be recognized, resolved and ultimately prevented?

During this presentation you will learn why using lots of static code is harmful and goes
against the principles of Object Orientated Design and harms your code in several ways.
You'll learn how to write code without making excessive use of static, and how to refactor
static code into something less problematic.

## Audience

This presentation is aimed at developers. It is suitable both for people new to the
field and those with many years of experience.

Examples are mainly in PHP and Java, though the presentation also applies to
other OOP languages. All examples are trivial, so knowledge of these languages
is not required, while of course a plus.

## Topic list

The topics covered include:

* Loose coopling between objects
* Making code testable
* Making code flexible
* The relation between static code and global state
* The Singleton design pattern
* Why math.abs is not problematic
* The place of static in an OO language
