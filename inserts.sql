use usrps;

insert into players(playerId, nickname)
values (1, 'Dorka'),
       (2, 'DMurnett'),
       (3, 'Gwen Tech witch'),
       (4, 'Jessica'),
       (5, 'E_Lay'),
       (6, 'LukeChriswalker '),
       (7, 'Kali'),
       (8, 'Garlic');

insert into gameRounds(date, player1, player2, player1Symbol, player2Symbol)
values ('2020-05-08 15:02:43', 4, 3, 'rock', 'paper'),
       ('2020-05-08 15:11:14', 2, 1, 'rock', 'scissors' ),
       ('2021-12-16 17:24:32', 6, 5, 'paper', 'paper'   ),
       ('2021-12-16 17:26:25', 5, 7, 'scissors', 'rock' ),
       ('2021-12-17 17:32:54', 5, 8, 'scissors', 'paper');