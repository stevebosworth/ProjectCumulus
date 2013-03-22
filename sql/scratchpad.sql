

l.law_name, b.book_num, b.book_title, t.title_num, t.title_title, c.ch_num, c.ch_title, d.div_num, d.div_title, sd.sub_div_num, sd.sub_div_title



INNER JOIN titles t ON s.title_id = t.title_id IF
		INNER JOIN chapters c ON s.ch_id = c.ch_id AND s.ch_id > 0
		INNER JOIN divisions d ON s.div_id = d.div_id AND s.div_id > 0
		INNER JOIN subdivisions sd ON s.sub_div_id = sd.sub_div_id AND s.sub_div_id > 0

if(s.law_id > 0, l.law_code),
		if(s.book_id > 0, b.book_num),
		if(s.book_id > 0, b.book_title)


--Add Books

INSERT INTO `books` (`book_id`, `law_id`, `book_num`, `book_title`)
VALUES
	(1, 1, '1', 'Persons'),
	(2, 1, '2', 'The Family'),
	(3, 1, '3', 'Successions'),
	(4, 1, '4', 'Property'),
	(5, 1, '5', 'Obligations'),
	(6, 1, '6', 'Prior Claims and Hypothecs'),
	(7, 1, '7', 'Evidence'),
	(8, 1, '8', 'Prescriptions'),
	(9, 1, '9', 'Publication of Rights'),
	(10, 1, '10', 'Private International Law'),
	(11, 1, '114', 'Laws of the sea');


