create table password_resets
(
    email      varchar not null,
    token      varchar not null,
    created_at datetime
);

create index password_resets_email_index
    on password_resets (email);

