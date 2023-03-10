create table migrations
(
    id        INTEGER not null
        primary key autoincrement,
    migration varchar not null,
    batch     INTEGER not null
);

