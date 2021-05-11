create or replace database usrps;

use usrps;

create table players
(
    playerId decimal(10, 0) primary key unique,
    nickname varchar(50) not null
);

create table gameRounds
(
    gameId        decimal(10, 0) primary key,
    time          datetime       not null   ,
    player1       decimal(10, 0) not null,
    player2       decimal(10, 0) not null,
    player1Symbol ENUM ('rock', 'paper', 'scissors'),
    player2Symbol ENUM ('rock', 'paper', 'scissors')
);

alter table gameRounds
    add foreign key (player1) references players (playerId)
        on delete cascade;
alter table gameRounds
    add foreign key (player2) references players (playerId)
        on delete cascade;