create or replace database usrps;
use usrps;

grant ALL ON usrps.* to dbuser@localhost;

create table players
(
    playerId int(10) primary key auto_increment,
    nickname varchar(50) not null
);

create table gameRounds
(
    gameId        int(10) primary key auto_increment,
    date          datetime not null,
    player1       int(10)  not null,
    player2       int(10)  not null,
    player1Symbol ENUM ('rock', 'paper', 'scissors'),
    player2Symbol ENUM ('rock', 'paper', 'scissors')
);

alter table gameRounds
    add foreign key (player1) references players (playerId)
        on delete cascade;
alter table gameRounds
    add foreign key (player2) references players (playerId)
        on delete cascade;