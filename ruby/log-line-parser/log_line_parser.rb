class LogLineParser
  def initialize(line)
    @line = line
    @idx = @line.index(': ')
  end

  def message
    @line.slice(@idx + 1, @line.size - 1).strip
  end

  def log_level
    # idx = @line.index(': ')
    @line.slice(0, @idx - 1).delete_prefix('[').delete_suffix(']').downcase
  end

  def reformat
    "#{message} (#{log_level})"
  end
end
