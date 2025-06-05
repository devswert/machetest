<?

function get_paciente_by_email(string $email): array
{
    return [];
}

function get_paciente_by_id(int $id): Paciente
{
    return new Paciente(1, "João", "joao@gmail.com", "1234567890");
}
