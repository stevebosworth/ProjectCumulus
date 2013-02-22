INSERT INTO laws
VALUES ('Civil Code of Quebec',
        'CCQ');
INSERT INTO books (law_id, book_num, book_title)
VALUES (1, 1,
        '1',
        'Persons'), (1,'2', 'The Family'), (1, '3', 'Successions'), (1, '4', 'Property'), (1, '5', 'Obligations'), (1, '6', 'Prior Claims and Hypothecs'), (1, '7', 'Evidence'), (1, '8', 'Prescriptions'), (1, '9', 'Publication of Rights'), (1, '10', 'Private International Law');

INSERT INTO titles (title_num, title_title, book_id)
VALUES ('1', 'Enjoyment and Exercise of Civil Rights', 1), ('2', 'Certain Personaility Rights', 1), ('3', 'Certain Particulars Relating to the Status of Persons', 1), ('4', 'Capacity of Persons', 1), ('5', 'Legal Persons', 1);


INSERT INTO chapters (ch_num, ch_title, title_id)
VALUES ('i', 'Integrity and the Person', 2), ('ii', 'Respect of children\'s Rights', 2), ('iii', 'Respect of the Reputation and Privacy', 2), ('iv', 'Respect of the Body After Death', 2), ('i', 'Name', 3), ('ii', 'Domicile and Residence', 3), ('iii', 'Absense and Death', 3), ('iv', 'Resister and Acts of Civil Status', 3), ('i', 'Majority and Minority', 4), ('ii', 'Tutorship to Minors', 4), ('iii', 'Protective Supervision of Persons of Full Age', 4), ('i', 'Juridicial Personality', 5), ('ii', "Provisions Applicable to Certain Legal Persons", 5);

INSERT INTO divisions (div_num, div_title, ch_id)
VALUES ('i', 'Care', 1), ('i', 'Confinement in an institution and psychiatric assessment', 1);