create table guida (
	followers int,
	rating int,
	visits int,
	nome varchar,
	cognome varchar,
	image varchar
);
create table schede (
	date date,
	price int,
	description varchar,
	language varchar,
	title varchar,
	nome_guida varchar,
	cognome_guida varchar,
	citta varchar,
	ore int,
	persone int,
	time time
);
create table utente_guida(
	nome varchar(255),
	cognome varchar(255),
	email varchar(255),
	password varchar(255),
	citta varchar(255)
);

insert into guida values('235', '3.5', '47', 'Paolo', 'Manzi', 'image/images/profile1.jpg');
insert into guida values('11', '3', '15', 'Marco', 'Marconi', 'image/images/profile3.jpg');
insert into guida values('23', '4', '20', 'Sara', 'Manzi', 'image/images/profile5.jpg');
insert into guida values('112', '5', '100', 'Paolo', 'Paoli', 'image/images/profile9.jpg');
insert into schede values('10/06/2023', '60', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Italiano', 'Alla scoperta dei Fori Romani', 'Paolo', 'Paoli', 'Roma', '3', '12', '10:55');
insert into schede values('15/06/2023', '65', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Italiano', 'Alla scoperta dei Fori Romani', 'Marco', 'Manzi', 'Roma', '3', '12', '10:55');
insert into guida values('11', '4', '12', 'Paolo', 'Manzi', 'image/images/profile2.jpg');
insert into schede values('19/07/2023', '60', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Italiano', 'Alla scoperta del Colosseo', 'Paolo', 'Paoli', 'Roma', '2', '16', '16:55');
insert into schede values('10/06/2023', '50', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Tedesco', 'Gita all''aperto', 'Marco', 'Marconi', 'Padova', '1', '14', '19:00');
insert into schede values('14/06/2023', '70', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Inglese', 'Goditi Napoli', 'Marco', 'Marconi', 'Napoli', '1', '8', '11:30');
insert into schede values('13/10/2023', '55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Spagnolo', 'Che bella Capri', 'Marco', 'Marconi', 'Costiera Amalfitana', '5', '20', '11:00');
insert into schede values('09/01/2024', '55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Russo', 'Vieni a vedere le luminarie', 'Sara', 'Manzi', 'Salerno', '2', '10', '16:30');
insert into schede values('10/06/2023', '60', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Tedesco', 'Torna a Sorrento', 'Marco', 'Marconi', 'Sorrento', '2', '15', '09:55');
insert into schede values('10/08/2023', '75', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Tedesco', 'Visita della Montagna Spaccata', 'Sara', 'Manzi', 'Gaeta', '2', '20', '15:15');
insert into schede values('15/08/2023', '80', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Inglese', 'Guarda il Pantheon', 'Marco', 'Marconi', 'Roma', '5', '22', '11:00');
insert into schede values('10/06/2023', '50', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Spagnolo', 'Visita di Padova', 'Paolo', 'Paoli', 'Padova', '6', '19', '14:35');
insert into schede values('21/07/2023', '55', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quis elit mi. Vivamus pulvinar efficitur turpis, a facilisis dolor euismod nec. Nulla lobortis et velit et molestie. Nulla sapien ligula, consectetur at pretium et, volutpat in lectus. Cras imperdiet velit hendrerit mi blandit, sit amet vulputate neque feugiat. Suspendisse dignissim eget turpis id posuere.
','Francese', 'Goditi Napoli in tutto il suo splendore', 'Paolo', 'Manzi', 'Napoli', '4', '14', '09:45');

insert into utente_guida values('Mario','Reda','marioreda81@gmail.com','1234','');

insert into guida values('10', '5', '19', 'Mario', 'Reda', 'image/images/profile1.jpg');
insert into utente_guida values('Mario', 'Reda', 'marioreda@gmail.com', 'pppp', 'Formia');
insert into guida values('10', '5', '19', 'Mario', 'Meda', 'image/images/profile1.jpg');
insert into utente_guida values('Mario', 'Meda', 'mariomeda@gmail.com', 'pppp', 'Formia');
insert into guida values('10', '5', '19', 'Jario', 'Reda', 'image/images/profile1.jpg');
insert into utente_guida values('Jario', 'Reda', 'jarioreda@gmail.com', 'pppp', 'Formia');
insert into guida values('10', '5', '19', 'Jario', 'Meda', 'image/images/profile1.jpg');
insert into utente_guida values('Jario', 'Meda', 'jariomeda@gmail.com', 'pppp', 'Formia');