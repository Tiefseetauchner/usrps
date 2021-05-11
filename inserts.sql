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

insert into gameRounds(gameId, player1, player2, player1Symbol, player2Symbol)
values (1, 4, 3, 'rock', 'paper'),
       (2, 2, 1, 'rock', 'scissors'),
       (3, 6, 5, 'paper', 'paper'),
       (4, 5, 7, 'scissors', 'rock'),
       (5, 5, 8, 'scissors', 'paper');