create table failed_jobs
(
    id         INTEGER not null
        primary key autoincrement,
    uuid       varchar not null,
    connection TEXT    not null,
    queue      TEXT    not null,
    payload    TEXT    not null,
    exception  TEXT    not null,
    failed_at  datetime default CURRENT_TIMESTAMP not null
);

create unique index failed_jobs_uuid_unique
    on failed_jobs (uuid);

