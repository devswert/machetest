<?

function is_public_folder_available(): bool
{
    return true;
}

function get_public_folder_path(): string
{
    if (!is_public_folder_available()) {
        throw new Exception("Public folder is not available");
    }

    return "/public";
}


function is_new_paciente_available(): bool
{
    return true;
}
