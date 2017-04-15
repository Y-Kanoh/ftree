CREATE TABLE t_accounts(
  user_id serial PRIMARY KEY,
  user_name text UNIQUE NOT NULL,
  password text NOT NULL,
  person_id integer
);


CREATE TABLE t_persons(
  person_id serial PRIMARY KEY,
  name text,
  sex  integer,
  birthday date,
  deathday date,
  nickname text
);

CREATE TABLE t_notes(
  note_id serial PRIMARY KEY,
  note_title text,
  body text
);

CREATE TABLE t_person_note(
  id serial PRIMARY KEY,
  person_id integer REFERENCES t_persons(person_id),
  note_id integer REFERENCES t_notes(note_id)
);

CREATE TABLE t_relations(
  relation_id serial PRIMARY KEY,
  person_id_1 integer REFERENCES t_persons(person_id),
  person_id_2 integer REFERENCES t_persons(person_id),
  starting_pont integer REFERENCES t_persons(person_id),
  relation_type text
);

CREATE TABLE t_references(
  reference_id serial PRIMARY KEY,
  reference_title text,
  image_name text,
  note text
);

CREATE TABLE t_note_reference(
  id serial PRIMARY KEY,
  note_id integer REFERENCES t_notes(note_id),
  reference_id integer REFERENCES t_references(reference_id)
);
