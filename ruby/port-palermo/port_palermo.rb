module Port
  IDENTIFIER = :PALE

  def self.get_identifier(city)
    city.slice(0, 4).upcase.to_sym
  end

  def self.get_terminal(ship_identifier)
    cargo_name = ship_identifier.slice(0, 3)
    # if %w[OIL GAS].includes?(cargo_name)
    if cargo_name == 'OIL' || cargo_name == 'GAS'
      :A
    else
      :B
    end
  end
end
