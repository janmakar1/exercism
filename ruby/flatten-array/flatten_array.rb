module FlattenArray
  def self.flatten(arr)
    flattened = arr.flatten
    flattened.delete_if { |item| item.nil? == true }
    flattened
  end
end
