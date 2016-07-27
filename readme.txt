Directives: HTML annotations that trigger javascript behavior.
Modules: Where our application components live.
Controllers: Where we add application behavior.
Expressions: How values get displayed withing the page.

Use consistent names for all components following a pattern that describes the component's feature then (optionally) its type. My recommended pattern is feature.type.js. There are 2 names for most assets:

- the file name (avengers.controller.js)
- the registered component name with Angular (AvengersController)

Why?: Naming conventions help provide a consistent way to find content at a glance. Consistency within the project is vital. Consistency with a team is important. Consistency across a company provides tremendous efficiency.

Why?: The naming conventions should simply help you find your code faster and make it easier to understand.

You should, however, conform to modern practices in using angular 1.4. Notably, check out John Papa's Style Guide as a starting point for learning about that, and prefer 

- using custom directives over ng-controller declarations, and 
- using the Controller As syntax. 

Those two practices alone will prevent a lot of your headaches if you feel the need to port from 1.x to 2.0 when it comes out.

INSERT INTO `users`(`id`, `username`, `first_name`, `last_name`, `address`) VALUES (4, 'Rocky', 'Rocky', 'Balboa', '5th Avenue')



INSERT INTO `jobs`
	(`title`, `company`, `description`, `location`, `deadline`) 
VALUES 
	('Rabota 14','Firma 14','Opis 14','Lokacija 14','2016.01.01'),
	('Rabota 15','Firma 15','Opis 15','Lokacija 15','01.01.2016'),
	('Rabota 16','Firma 16','Opis 16','Lokacija 16','01.01.2016'),
	('Rabota 17','Firma 17','Opis 17','Lokacija 17','01.01.2016'),
	('Rabota 18','Firma 18','Opis 18','Lokacija 18','01.01.2016'),
	('Rabota 19','Firma 19','Opis 19','Lokacija 19','01.01.2016'),
	('Rabota 20','Firma 20','Opis 20','Lokacija 20','01.01.2016')









