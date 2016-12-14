function attachments_path($path = '')
{
  return public_path('files'.($path ? DIRECTORY_SEPARATOR.$path : $path));
}
